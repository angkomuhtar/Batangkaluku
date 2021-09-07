<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

class AuthController extends DashboardController
{
    public function index()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $remeber_me = $request->remember ? true : false;
        $credential = $request->only(['email', 'password']);
        if (auth()->attempt($credential, $remeber_me)) {
            return redirect()->intended(route('dashboard'));
        }
        return redirect()->back()->with('error', 'Username/Password Tidak Ditemukan!');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }

    public function profile()
    {
        return view('admin.pages.profile');
    }

    public function postProfile(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'nullable',
            'old_password' => 'nullable'
        ]);
        if ($data['password'] || $data['old_password']) {
            $request->validate([
                'old_password' => 'password',
                'password' => 'required|confirmed'
            ]);
            $data['password'] = bcrypt($data['password']);
        } else {
            unset($data['password']);
        }
        $user = auth()->user();
        $user->update($data);
        return response()->json([
            'message' => 'Berhasil Update Profile'
        ]);
    }
}
