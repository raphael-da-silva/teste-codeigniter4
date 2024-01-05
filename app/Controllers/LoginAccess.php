<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserCredentials;
use CodeIgniter\HTTP\RedirectResponse;
use stdClass;

// Teste da vaga de Codeigniter - Raphael da Silva
class LoginAccess extends BaseController
{
    private $userAuth;
    private $loginSession;

    public function __construct()
    {
        $this->userAuth = new UserCredentials();
        $this->loginSession = session();
    }

    public function index(): RedirectResponse
    {
        $email    = $this->request->getRawInputVar('email');
        $password = $this->request->getRawInputVar('password');
        $user     = $this->userAuth->getUser($email);

        if($user == null){
            $this->loginSession->setFlashdata('loginError','Credenciais inválidas.');
            return redirect()->to('/index');
        }

        $match = password_verify($password, $user->password);

        if(!$match){
            $this->loginSession->setFlashdata('loginError','Credenciais são inválidas.');
            return redirect()->to('/index');
        }

        return $this->userIsLogged($user);
    }

    public function userIsLogged(stdClass $user): RedirectResponse
    {
        $this->loginSession->set('loggedUser', [
            'name'  => $user->name
        ]);

        return redirect()->to('/clientes');
    }

    public function logout(): RedirectResponse
    {
        $this->loginSession->remove('loggedUser');
        return redirect('index');
    }
}