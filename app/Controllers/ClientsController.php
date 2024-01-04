<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ClientModel;
use App\Models\ClientsList;
use CodeIgniter\Exceptions\PageNotFoundException;

class ClientsController extends BaseController
{
    use RestrictedController;

    private $clients;

    public function __construct()
    {
        $this->clients = new ClientsList;
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

    public function insert()
    {
        $model = new ClientModel();

        if(!$this->validate($model->getValidationRules(), $model->getValidationMessages())){
            return view('client-form.php');
        }

        $model->save($this->request->getRawInput());
        return redirect()->to('/clientes');
    }
}