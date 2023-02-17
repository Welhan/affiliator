<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Client extends BaseController
{
    public function index()
    {
        // return redirect()->to('login_client');
    }

    public function loginForm()
    {
        return redirect()->to('login_client');
    }

    public function login()
    {
    }
}
