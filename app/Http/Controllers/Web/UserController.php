<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

use App\SmsHelper\Sms;
use Hash;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;

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

    public function loginForm()
    {
        return view('web.login');
    }

    public function studentLoginSubmit(Request $request){
        $this->validate($request, [
            'mobile'   => 'required|digits:10',
            'password' => 'required|string|min:8',
        ]);

        $login = $this->loginCheck($request->input('mobile'),$request->input('password'));
        if ($login) {
            return redirect()->intended('student/dashboard');
        } else {
            return back()->withInput($request->only('mobile'))->with('login_error',' Mobile or password incorrect');
        }
    }

    function loginCheck($mobile,$password){
        $credentials = array(
            'mobile' => $mobile,
            'password'  => $password,
            'status'=>1,
            'is_register'=>2,
        );
       
        if(Auth::guard('user')->attempt($credentials)) {
            return true;
        }else{
            return false;
        }
    }

    public function logout(Request $request){
        Auth::guard('user')->logout();
        $request->session()->invalidate();
        return redirect()->route('web.login');
    }

    public function index()
    {
        return view('user.index');
    }
}
