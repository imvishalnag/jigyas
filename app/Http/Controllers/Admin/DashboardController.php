<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Auth;

class DashboardController extends Controller
{
    public function dashboardView()
    {
       
        return view('admin.dashboard');
       
    }

    public function changePasswordForm()
    {
        return view('admin.change_password_form');
    }

    public function changePassword(Request $request)
    {
        $this->validate($request, [
            'current_password' => 'required|min:8',
            'new_password' => ['required', 'string', 'min:8', 'same:confirm_password'],
        ]);

        $user = Admin::where('id',Auth::guard('admin')->id())->first();

        if(Hash::check($request->input('current_password'), $user->password)){
            Admin::where('id',1)->update([
                'password'=>Hash::make($request->input('new_password')),
            ]);
            return redirect()->back()->with('message','Password Changed Successfully');
        }else{
            return redirect()->back()->with('error','Sorry Current Password Does Not Correct');
        }
    }
    
}
