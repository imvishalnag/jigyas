<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

use App\SmsHelper\Sms;
use Hash;

class UserController extends Controller
{
    public function userOtpSend($mobile)
    {
        $check_user = Student::where('mobile',$mobile)->where('is_register',2)->count();
        if ($check_user > 0) {
            return 3;
        }
        $user = Student::firstOrNew([
            'mobile' => $mobile
        ]);
        if ($user) {
            $user->otp = rand(111111,999999);
            if ($user->save()) {
                $request_info = urldecode("Your OTP is $user->otp . Please Do Not Share This Otp To Any One. Thank you");
                Sms::smsSend($mobile,$request_info);
                return 1;
            }else{
                return 2;
            }
        }else{
            return 2;
        }
    }

    public function studentRegister(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'mobile' => 'required',
            'otp' => 'required',
            'password' => 'required|string|min:8|same:confirm_password',
        ]);
        
        $student = Student::where('mobile',$request->input('mobile'))->where('otp',$request->input('otp'))->first();
        if ($student) {
            $student->name = $request->input('name');
            $student->password = Hash::make($request->input('confirm_password'));
            $student->otp = null;
            $student->is_register = 2;
            $student->save();
            return redirect()->back()->with('message','Account Registered Successfully');
        }else{
            return redirect()->back()->with('error','Please Enter Correct OTP');
        }
    }
}
