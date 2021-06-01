<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        $user = auth('user')->user();

        return view('front.profile.index', compact('user'));
    }
}
