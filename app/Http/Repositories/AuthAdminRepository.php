<?php

namespace App\Http\Repositories;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthAdminRepository
{
    public function loginPage()
    {
        return view('Admin.Auth.auth_login');
    }

    public function login($credentials)
    {
        if (Auth::guard('admins')->attempt($credentials)) {
            return redirect()->route('admin.index');
        } else {
            return redirect()->back();
        }
    }
}
