<?php

namespace App\Controllers;

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