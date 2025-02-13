<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
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
        return dd($user);
    }

    public function login()
    {
        return view('user.login');
    }

    public function loginPost(Request $request)
    {
        $data = $request->all();
        dd($data);
    }
}
