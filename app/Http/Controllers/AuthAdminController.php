<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repositories\AuthAdminRepository;

class AuthAdminController extends Controller
{
    private $authAdminRepository;

    public function __construct(AuthAdminRepository $authAdminRepository)
    {
        $this->authAdminRepository = $authAdminRepository;
    }

    public function loginPage()
    {
        return $this->authAdminRepository->loginPage();
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        return $this->authAdminRepository->login($credentials);
    }
}


