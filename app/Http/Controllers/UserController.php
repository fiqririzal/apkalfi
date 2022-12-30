<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function getRegister(){
        return view('auth.register');
    }
    public function postRegister(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            // 'phone' => 'required',

        ]);
        $user = User::create([

            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            // 'phone' => $request->phone,
        ]);
        $user->assignRole('User');

        return redirect()->to('/');
    }
    public function getLogin(){

        return view('auth.login');
    }
    public function postLogin(Request $request){
        $rules =[
            'email' => 'required|email',
            'password' => 'required',
        ];
        $message =[
            'email.required' => 'Email Kudu Diisi Brader ku',
            'email.email' => 'Yang bener dong email nya',
            'password.required' => 'Password Kudu Diisi Brader Ku',
        ];
        $Validator = Validator::make($request->all(), $rules, $message);

        if($Validator->fails()){
            return redirect()->back()->withErrors($Validator)->withInput($request->all);

        }
        $data = [
            'email'=>$request->email,
            'password'=>$request->password,

        ];

        Auth::attempt($data);

        if (Auth::check()) {

            return redirect()->to('/');
        }
    }
}
