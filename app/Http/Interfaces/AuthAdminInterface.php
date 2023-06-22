<?php

namespace App\Http\Interfaces;

interface AuthAdminInterface
{
    public function loginPage();
    public function login($request);
}
