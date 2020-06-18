<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function show($user)
    {
        $user = User::where('firstname', $user)->first();
        if (!$user) {
            abort(404);
        }
        return view('user', [
                        'user' => $user,
                    ]);
    }
}
