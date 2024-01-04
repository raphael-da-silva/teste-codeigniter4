<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ClientModel;
use App\Models\ClientsList;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\HTTP\RedirectResponse;

class ClientsController extends BaseController
{
    use RestrictedController;

    private $clients;
    private $model;

    public function __construct()
    {
        $this->clients = new ClientsList;
        $this->model   = new ClientModel;
        $this->isLogged();
    }

    public function index(): string
    {
        return view('clients-start', [
            'list' => $this->clients->getAll()
        ]);
    }

    public function new(): string
    {
        return view('client-form.php');
    }

    public function update(int $id): string
    {   
        $client = $this->clients->getById($id);
  
        if(!$client){
            throw new PageNotFoundException('Cliente não encotrado');
        }

        return view('client-form.php', [
            'client' => $client
        ]);
    }

    public function insert(): mixed
    {
        if(!$this->validate($this->model->getValidationRules(), $this->model->getValidationMessages())){
            return view('client-form.php');
        }

        $this->model->save($this->request->getRawInput());
        return redirect()->to('/clientes');
    }

    public function remove(): RedirectResponse
    {
        $id = $this->request->getRawInputVar('id');

        $this->model->delete($id);
        return redirect()->to('/clientes');
    }
}