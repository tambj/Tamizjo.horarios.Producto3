<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{


    function create(Request $request){
        //Validate Inputs
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:teachers,email',
            'password'=>'required|min:5|max:30',
            'cpassword'=>'required|min:5|max:30|same:password'
        ]);

        $user = new Teacher();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = \Hash::make($request->password);
        $user->nif = $request->nif;
        $user->surname = $request -> surname;
        $user->telephone = $request -> telephone;


        $save = $user->save();

        if( $save ){
            return redirect()->route('admin.teacher.index')
            ->with('success', 'User created successfully.');
        }else{
            return redirect()->back()->with('fail','Something went wrong, failed to register');
        }
    }

    function check(Request $request){
        //Validate inputs
        $request->validate([
            'email'=>'required|email|exists:teachers,email',
            'password'=>'required|min:5|max:30'
        ],[
            'email.exists'=>'This email is not exists on teacher table'
        ]);

        $creds = $request->only('email','password');
        if( Auth::guard('teacher')->attempt($creds) ){
            return redirect()->route('teacher.home');
        }else{
            return redirect()->route('teacher.login')->with('fail','Incorrect credentials');
        }
    }

    function logout(){
        Auth::guard('teacher')->logout();
        return redirect('/');
    }
}
