<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Brian2694\Toastr\Facades\Toastr;

class UserController extends Controller
{
    public function login(Request $request)
    {
       $user = User::where(['email'=>$request->email])->first();
       if (!$user || !Hash::check($request->password, $user->password))
       {
           return 'User name or password not match';
       }
       else{
           $request->session()->put('wahid',$user );
           return redirect('/');
       }

    }
    public function register(Request $request)
    {
        $user = new User();
        $user->name         =$request->name;
        $user->email        =$request->email;
        $user->password     =Hash::make($request->password);
        $user->save();
        Toastr::success('You Have Successfully Implement Toastr Notification :)', 'Success!!');
        return redirect('login');
    }
}
