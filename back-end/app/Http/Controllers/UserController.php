<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getSocialActionsPendents(Request $request)
    {
        return User::where('profile', 'social_action')->where('active', false)->get();
    }
}
