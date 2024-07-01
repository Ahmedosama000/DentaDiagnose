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

        $requests = ModelsRequest::with('user:users.id,firstname,secondname,email')
        ->where('Isarchieved',0)
        ->where('center_email',$AuthEmail)->get();

        $archieves = ModelsRequest::with('user:users.id,firstname,secondname,email')
        ->where('Isarchieved',1)
        ->where('center_email',$AuthEmail)->get();

        $reports = Ray::query()->where('rad_id',$AuthID)->get();

        return view('radiology',compact('requests','archieves','reports'));
    }

    public function ShowDetails($id){

        $AuthID = Auth()->user()->id;
        $AuthEmail = Auth()->user()->email;

        $requests = ModelsRequest::with('user:users.id,firstname,secondname,email')
        ->where('Isarchieved',0)
        ->where('center_email',$AuthEmail)->get();

        $archieves = ModelsRequest::with('user:users.id,firstname,secondname,email')
        ->where('Isarchieved',1)
        ->where('center_email',$AuthEmail)->get();

        $reports = Ray::query()->where('rad_id',$AuthID)->get();

        $info = Ray::query()->where('id',$id)->get()[0];

        if ($info->rad_id == $AuthID){

            $doctor_mail = User::query()->where('id',$info->dent_id)->get()[0];
            return view('radiology',compact('info','requests','archieves','reports','doctor_mail'));
        }
        return redirect()->route('show.center');

    }

    public function ChangeInfo(ChangeDentistRequest $request){

        $AuthID = Auth()->user()->id;

        $NewData = [

            'firstname' => $request->firstname ,
            'secondname' => $request->secondname ,
            'email' => $request->email,
            'phonenumber' => $request->phone,
            'governate' => $request->governorate ,
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
        return redirect()->route('show.center');

    }

    public function ResendRequest(Request $request ,$id){

        $AuthID = Auth()->user()->id;
        $Authmail = Auth()->user()->email;
        $ReqData = ModelsRequest::find($id);
        $Reqmail = $ReqData->center_email;

        $ResendData = Ray::query()->where('dent_id',$ReqData->den_id)
        ->where('rad_id',$AuthID)->where('email',$ReqData->patient_email)
        ->get();

        if ($Authmail == $Reqmail){

            $ReqData->Isarchieved = 1;
            $ReqData->save();

            $resend = $ResendData[0]->replicate();
            $resend->save();

            return redirect()->route('show.center')->with('success', 'Request Re-Send Successfully');
        }
        return redirect()->route('show.center');
    }

    public function ResendReport($id){

        $AuthID = Auth()->user()->id;
        $report = Ray::find($id);
        
        if ($AuthID == $report->rad_id){
            $send = $report->replicate();
            $send->save();
            return redirect()->route('show.center')->with('success', 'Request Re-Send Successfully');
        }
        return redirect()->route('show.center');
    }

    public function SendReport(Request $request){

        $request->validate([
            'name' => ['required','string','max:100'],
            'email' => ['required','email','string','max:100','exists:reservation,email_patient'],
            'phone' => ['required','string','max:100'],
            'age' => ['required','numeric'],
            'dremail' => ['required','email','string','max:100'],
        ]);

        $AuthID = Auth()->user()->id;

        try {
            
            $DenID = User::query()->where('email',$request->dremail)->get()[0]->id;
            $data = [
                'full_name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'age' => $request->age,
                'rad_id' => $AuthID,
                'dent_id' => $DenID,
            ];
    } 
        catch (\Throwable $th) {
            
            $data = [
                'full_name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'age' => $request->age,
                'rad_id' => $AuthID,
                'dent_id' => null,
            ];
        }
        Ray::create($data);
        return redirect()->route('show.center')->with('success', 'Report Created Successfully');
    }
}
