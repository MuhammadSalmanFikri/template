<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;

class ChangePasswordController extends Controller
{
    public function showChangePasswordGet()
    {
        return view('auth.passwords.change-password');
    }

    public function changePasswordPost(Request $request)
    {
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // Password Lama
            return redirect()->back()->with("error", "Password akun ada salah!");
        }

        if (strcmp($request->get('current-password'), $request->get('new-password')) == 0) {
            // Password sama dengan yang baru
            return redirect()->back()->with("error", "Password baru anda tidak boleh sama dengan password lama");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:8|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success", "Password successfully changed!");
    }
}
