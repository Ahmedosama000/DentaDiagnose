<?php

namespace App\Http\Controllers\Dentist;

use App\Models\Ray;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ChangeDentistRequest;
use App\Http\Requests\DentistRequest;
use App\Models\Request as ModelsRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DentistController extends Controller
{
    

    public function showAll(){

        $AuthID = Auth()->user()->id;

        $data = Ray::query()->where('dent_id',$AuthID)->get();
        $centers = User::query()->where('type','center')->get();

        return view('services',compact('data','centers'));

    }

    public function ShowDetails($id){

        $AuthID = Auth()->user()->id;

        $info = Ray::query()->where('id',$id)->get()[0];
        $data = Ray::query()->where('dent_id',$AuthID)->get();
        $doctor_mail = User::find($AuthID);

        if ($info->dent_id == $AuthID){

            return view('services',compact('info','data','doctor_mail'));

        }

        return redirect()->route('show.dentist');
    }

    public function DenRequest(DentistRequest $request){

        $AuthID = Auth()->user()->id;

        $reqs = $request->except('_token');
        $reqs['den_id'] = $AuthID;

        $req = ModelsRequest::create($reqs);

        return redirect()->route('show.dentist');
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

        return redirect()->route('show.dentist');

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
            return redirect()->route('show.dentist');
        }
        return redirect()->route('show.dentist');
    }

}
