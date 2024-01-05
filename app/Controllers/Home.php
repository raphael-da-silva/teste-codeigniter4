<?php

namespace App\Controllers;

use App\Controllers\BaseController;

// Teste da vaga de Codeigniter - Raphael da Silva
class Home extends BaseController
{
    public function index(): string
    {
        return view('start', [
            'error' => session()->getFlashdata('loginError')
        ]);
    }
}