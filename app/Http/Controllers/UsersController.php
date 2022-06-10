<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function login_index(){
        return view('auth.login');
    }


    public function login(Request $request){
        $request->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required|alphaNum|min:8',
        ]);

        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );

        Auth::attempt($user_data);

        if(Auth::attempt($user_data)){
            return redirect()->route('root');
        }
        else{
            return back()->with('notice', '還沒註冊過嗎?');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('root');
    }


    public function register(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email:rfc,dns|unique:users,email',
            'password' => 'required|alphaNum|min:8',
            'confirm_password' =>'required|alphaNum|same:password'
        ]);

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);
        return redirect()->route('login')->with('notice','已註冊成功');
    }
}
