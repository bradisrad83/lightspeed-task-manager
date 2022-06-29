<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\UserResource;
use App\Http\Resources\UserCollection;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.users')->with('users', new UserCollection($users));
    }

    public function show(Request $request, User $user)
    {
        return view('users.user')->with('user', new UserResource($user));
    }
}
