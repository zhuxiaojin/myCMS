<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserMessageRequest;
use App\Http\Controllers\Controller;
use App\User;

class RegisterController extends Controller
{
    public function registerForm() {
        return view('auth.register');
    }

    public function register(UserMessageRequest $request) {
        $data = $request->all();
        $data['name'] = $request->input('name');
        $data['email'] = $request->input('email');
        $data['password'] = bcrypt($request->input('password'));
        $user = User::create($data);
        \Auth::login($user);
        return redirect()->route('role.index');
    }
}
