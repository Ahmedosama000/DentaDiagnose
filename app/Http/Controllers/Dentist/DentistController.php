<?php

namespace App\Http\Controllers\Dentist;

use App\Models\Ray;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ChangeDentistRequest;
use App\Http\Requests\DentistRequest;
use App\Http\Requests\ReserveRequest;
use App\Models\Request as ModelsRequest;
use App\Models\Reserve;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DentistController extends Controller
{
    

    public function showAll(){

        $AuthID = Auth()->user()->id;

        $data = Ray::query()->where('dent_id',$AuthID)->get();
        $centers = User::query()->where('type','center')->get();
        $reserves = Reserve::query()->where('den_id',$AuthID)->get();

        return view('services',compact('data','centers','reserves'));

    }

    public function ShowDetails($id){

        $AuthID = Auth()->user()->id;

        $centers = User::query()->where('type','center')->get();
        $reserves = Reserve::query()->where('den_id',$AuthID)->get();

        $info = Ray::query()->where('id',$id)->get()[0];
        $data = Ray::query()->where('dent_id',$AuthID)->get();
        $doctor_mail = User::find($AuthID);

        if ($info->dent_id == $AuthID){

            return view('services',compact('info','data','doctor_mail','reserves','centers'));

        }

        return redirect()->route('show.dentist');
    }

    public function DenRequest(DentistRequest $request){

        $AuthID = Auth()->user()->id;

        $reqs = $request->except('_token');
        $reqs['den_id'] = $AuthID;

        $req = ModelsRequest::create($reqs);
        return redirect()->route('show.dentist')->with('success', 'Request sent Successfully');
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

        return redirect()->route('show.dentist')->with('success', 'Info changed Successfully');

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
            return redirect()->route('show.dentist')->with('success', 'Password changed Successfully');
        }
        return redirect()->route('show.dentist');
    }

    public function Reserving(ReserveRequest $request){

        $AuthID = Auth()->user()->id;

        $data = [

            'name' => $request->name,
            'email_patient' => $request->email,
            'age' => $request->age,
            'phone_patient' => $request->phone,
            'message' => $request->message,
            'den_id' => $AuthID,
        ];
        Reserve::create($data);
        return redirect()->route('show.dentist')->with('success', 'Reserve added Successfully');
    }

    public function ReserveInfo($id){

        $AuthID = Auth()->user()->id;
        $ReservedData = Reserve::find($id);
        $data = Ray::query()->where('dent_id',$AuthID)->get();
        $centers = User::query()->where('type','center')->get();
        $reserves = Reserve::query()->where('den_id',$AuthID)->get();

        if ($AuthID == $ReservedData->den_id){

            return view('services',compact('ReservedData','data','centers','reserves'));
        }

        return redirect()->route('show.dentist');

    }

    public function Update(Request $request , $id){

        $request->validate([
            'name' => ['required','string','max:100'],
            'message' => ['string'],
        ]);

        $AuthID = Auth()->user()->id;
        $ReservedData = Reserve::find($id);

        if ($AuthID == $ReservedData->den_id){

            $ReservedData->name = $request->name;
            $ReservedData->message = $request->message;

            $ReservedData->save();
            return redirect()->route('show.dentist')->with('success', 'Reserve updated Successfully');

        }
        return redirect()->route('show.dentist');
    }

    public function Destroy($id){

        $AuthID = Auth()->user()->id;
        $ReservedData = Reserve::find($id);

        if ($AuthID == $ReservedData->den_id){

            $ReservedData->delete();
            return redirect()->route('show.dentist')->with('success', 'Reserve deleted Successfully');
        }
        return redirect()->route('show.dentist');

    }

}
