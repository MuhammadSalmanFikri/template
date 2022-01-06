<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(Request $request)
    {
        return view('cms.profiles.profile', [
            'user' => $request->user()
        ]);
    }
}