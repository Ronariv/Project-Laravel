<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\MessageBag;

class AuthController extends Controller
{
    public function redirectRegister()
    {
        return view('register');
    }
    public function redirectLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $remember_me = $request->remember_me;

        $is_valid = auth()->attempt([
            'email' => $email,
            'password' => $password],
            $remember_me
        );

        if(!$is_valid){
            return back()->withErrors(new MessageBag(['Email or password is invalid']));

        }
        if($remember_me){
            Cookie::queue('email',$email,60);
            Cookie::queue('password',$password,60);
        }else{
            Cookie::queue('email','',-1);
            Cookie::queue('password','',-1);
        }
        $request->session()->regenerate();
        return redirect()->intended(route('index'));

    }

    public function register(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|confirmed',
        ]);
        
        $user = User::create([
            'name' => $validator['name'],
            'email' => $validator['email'],
            'password' => bcrypt($validator['password']),
            'role' => 'User',
        ]);
        $user->save();
    }
    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('index'));
    }
}
