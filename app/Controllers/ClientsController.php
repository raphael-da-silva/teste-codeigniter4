<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ClientsController extends BaseController
{
    use RestrictedController;

    public function index(): string
    {
        $this->isLogged();

        return view('clients-start');
    }
}