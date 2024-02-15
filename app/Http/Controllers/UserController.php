<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class UserController extends Controller
{
    function viewLogin(): Response
    {
        $data = [
            'title' => 'Login Administrator',
            'isAuthenticated' => false
        ];
        return \response()->view('admin.login', $data);
    }

    function login()
    {

    }

    function logout()
    {

    }
}
