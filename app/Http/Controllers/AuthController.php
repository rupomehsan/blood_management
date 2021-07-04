<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    // public function registerView()
    // {
    //     return view('auth.register');
    // }

    // public function registrasion()
    // {
    //     $data = request()->validate([
    //         'name'  =>'required',
    //         'email' => 'required|email|unique:users',
    //         'password' => 'required|min:5'
    //     ]);

    //     $user = new User();
    //     $user->name = request('name');
    //     $user->email = request('email');
    //     $user->password =Hash::make(request('password')) ;
    //     $user->save();
    //     return redirect()->back()->with('message','User Successfully register');
    // }


    public function login()
    {
        return view('auth.login');
    }

    public function createlogin()
    {
        $data = request()->validate([
            'email' => 'required|exists:users',
            'password' => 'required|min:5'
        ]);


        if (!Auth::attempt($data)) {
            return redirect()->back()->with('error', 'Credentials not matched');
        }

        return redirect('backend/dashboard')->with('message', ' successfully Login');
    }

    public function changepass()
    {
        $data = request()->validate([
            'old_pass' => 'required',
            'password' => 'required',
        ]);

        $old_pass = request('old_pass');
        $users = Auth::user();

        if (Hash::check($old_pass, $users->password)) {
            $users->password = Hash::make(request('password'));
            $users->update();
            return response()->json([
                'status' => 'done',
                'message' => 'Password Updated'
            ]);
        } else {
            return response()->json([
                'error' => 'error'
            ]);
        }
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }


}

