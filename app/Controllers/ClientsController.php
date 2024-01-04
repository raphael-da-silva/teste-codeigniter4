<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ClientsController extends BaseController
{
    public function index(): string
    {
        return view('clients-start');
    }
}