<?php

namespace App\Http\Controllers\Radiology;

use App\Models\Ray;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\Request as ModelsRequest;
use App\Http\Requests\ChangeDentistRequest;

class RadiologyController extends Controller
{
    public function show(){

        $AuthID = Auth()->user()->id;
        $AuthEmail = Auth()->user()->email;

        $requests = ModelsRequest::with('user:users.id,firstname,secondname,email')->get();
        $reports = Ray::query()->where('rad_id',$AuthID)->get();

        return view('radiology',compact('requests','reports'));
    }

    public function ChangeInfo(ChangeDentistRequest $request){

        $AuthID = Auth()->user()->id;

        $NewData = [

            'firstname' => $request->firstname ,
            'secondname' => $request->secondname ,
            'email' => $request->email,
            'phonenumber' => $request->phone,
            'governorate' => $request->governate ,
            'region' => $request->region ,
            'youraddress' => $request->street ,
        ];

        User::find($AuthID)->update($NewData);

        return redirect()->route('show.center')->with('success', 'Info changed Successfully');

    }

    public function ChangePassword(Request $request){

        $request->validate([
            'password' => ['required','string','min:8','max:100'],
            'newpassword' => ['required','string','min:8','max:100','confirmed'],
        ]);

        $AuthID = Auth()->user()->id;
        $user = User::find($AuthID);

        if (Hash::check($request->password , $user->password)) {

            $user->password = Hash::make($request->newpassword);
            $user->save();
            return redirect()->route('show.center')->with('success', 'Password changed Successfully');
        }
    }

}
