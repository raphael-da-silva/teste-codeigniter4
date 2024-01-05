<?php

namespace App\Controllers;

// Teste da vaga de Codeigniter - Raphael da Silva
trait RestrictedController
{
    public function isLogged( ): void
    {
        $userInSession = session()->get('loggedUser');

        if(empty($userInSession)){
            exit('Area restrita');
        }
    }
}