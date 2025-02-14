<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function index()
    {
        if (Auth::check()) {
            return redirect(route('dashboard'));
        } else return redirect(route('home'));
    }

    public function registration()
    {
        return view('user.register');
    }

    public function registerPost(Request $request)
    {
       $credentials = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email:dns','unique:users'],
            'password' => ['required', 'string', 'min:8', 'same:confirm_password'],
            'confirm_password' => ['min:8']
        ]);
        $credentials['password'] = bcrypt($credentials['password']);
        $user = User::create($credentials);
        return redirect(route('login'));
    }

    public function login()
    {
        return view('user.login');
    }

    public function loginPost(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

         return back()->with('loginError','Login Failed!');
    }

    public function logoutPost()
    {
        Auth::logout();
        return redirect('/');
    }

}
