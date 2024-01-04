<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index(): string
    {
        return view('start', [
            'error' => session()->getFlashdata('loginError')
        ]);
    }
}