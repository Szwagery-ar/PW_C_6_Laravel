<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function showLoginForm()
    {
        session()->forget('cart');
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($request->email === 'admin@gmail.com' && $request->password === 'admin123') {
            $admin = User::where('email', 'admin@gmail.com')->first();

            if (!$admin) {
                // ini email admin dan password
                $admin = User::create([
                    'name' => 'Admin',
                    'email' => 'admin@gmail.com',
                    'password' => Hash::make('admin123'),
                    'role' => 'admin'
                ]);
            }

            Auth::login($admin);
            $request->session()->regenerate();
            return redirect()->intended('/admin/dashboard');
        }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        return back()->with('error', 'Email atau password yang Anda masukkan salah!');
    }

    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'phone_number' => 'nullable|string',
            'address' => 'nullable|string',
            'profile_photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $userData = $request->except('profile_photo', 'password_confirmation');
        $userData['password'] = Hash::make($request->password);
        $userData['role'] = 'customer';

        if ($request->hasFile('profile_photo')) {
            $path = $request->file('profile_photo')->store('profile-photos', 'public');
            $userData['profile_photo_path'] = $path;
        }

        $user = User::create($userData);

        Auth::login($user);

        return redirect('/login')->with('success', 'Registrasi berhasil!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
