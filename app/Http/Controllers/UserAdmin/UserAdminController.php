<?php

namespace App\Http\Controllers\UserAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\UserAdmin;
use Illuminate\Support\Facades\Auth;

class UserAdminController extends Controller
{
    function check(Request $request){
        //Validate Inputs
        $request->validate([
            'email'=>'required|email|exists:users_admin,email',
            'password'=>'required|min:5|max:30'
        ],[
            'email.exists'=>'This email is not exists in users_admin table'
        ]);

        $creds = $request->only('email','password');

        if( Auth::guard('admin')->attempt($creds) ){

            return redirect()->route('admin.home');
        }else{

            return redirect()->route('admin.login')->with('fail','Incorrect credentials');
        }
    }

    function logout(){
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}
