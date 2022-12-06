<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {   
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::attempt($credentials)) {
            // dd('password benar');
            $request->session()->regenerate();
            return redirect('/');
        }

        // dd('password salah');
        return back()->with('loginError','email atau password salah');
    }
    public function register(Request $request)
    {
         $validatedData = $request->validate([
            'name' => 'required|max: 255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:255'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        return redirect('login')->with('success', "Registration succeed");
        return response()->json($request);
    }
       public function logout(Request $request)
    {
        Auth::logout();
 
        request()->session()->invalidate();
    
        request()->session()->regenerateToken();
    
        return redirect('/login');
    }
}
