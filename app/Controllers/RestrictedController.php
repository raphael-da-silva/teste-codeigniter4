<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Exceptions\RedirectException;

// Teste da vaga de Codeigniter - Raphael da Silva
trait RestrictedController
{
    public function isLogged(): void
    {
        $userInSession = session()->get('loggedUser');

        if(empty($userInSession)){
            exit('Acesso restrito a usuário logado.');
        }
    }
}