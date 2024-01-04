<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RedirectResponse;

class LoginAccess extends BaseController
{
    private $db;
    private $loginSession;

    public function __construct()
    {   
        $this->db = db_connect();
        $this->loginSession = session();
    }

    public function index(): RedirectResponse
    {
        $email    = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');

        $getUser = $this->db->query('SELECT name, email, password FROM users WHERE email = :email: LIMIT 1', [
            'email' => $email
        ]);

        $getUser = $getUser->getResultObject();

        if(count($getUser) == 0){
            $this->loginSession->setFlashdata('loginError','Credenciais inválidas.');
            return redirect()->to('/index');
        }

        $match = password_verify($password, $getUser[0]->password);

        if(!$match){
            $this->loginSession->setFlashdata('loginError','Credenciais são inválidas.');
            return redirect()->to('/index');
        }

        $this->loginSession->set('loggedUser', [
            'name'  => $getUser[0]->name,
            'email' => $getUser[0]->email
        ]);

        return redirect()->to('/clientes');
    }

    public function logout(): RedirectResponse
    {
        $this->loginSession->remove('loggedUser');
        return redirect('index');
    }
}