<?php

namespace App\Http\Controllers\Dealer;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DealerController extends Controller
{
    public function login()
    {
        return view('auth.dealer.login');
    }
    public function register()
    {
        return view('auth.dealer.register');
    }

    public function saveData(Request $request)
    {
       $request->validate([
            'name'=>'required|string',
            'email' =>'required|email|unique:users',
            'phone' =>'required|min:11|numeric',
            'password' =>'required|min:6',
            'confirm_password'=>'required|same:password'
       ]);

       $dealer = new User();
       $dealer->name = $request->name;
       $dealer->email = $request->email;
       $dealer->phone = $request->phone;
       $dealer->role = 2;
       $dealer->password = Hash::make($request->password);
       $dealer->save();
       return redirect()->route('dealer_login')->with('message','register successfully! please login');


    }

    public function loginCheck(Request $request)
    {
       $request->validate([
            'email' => 'required|email',
            'password' => 'required',
       ]);


       if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
       {

        return redirect()->route('dealer.dashboard');

       }else
       {
        return "creadential do not match!";
       }

    }

    public function dashboard()
    {
        return view('dealer.dealer_home');
    }


}
