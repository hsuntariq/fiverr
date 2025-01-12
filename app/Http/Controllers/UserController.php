<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function loginUser(Request $req)
    {

        $formFields = $req->validate([
            "name" => ['required'],
            "email" => ['email', 'required'],
            "password" => ['min:6', 'required'],
        ]);


        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);
        Auth::login($user);

        return response()->json($user);
    }
}
