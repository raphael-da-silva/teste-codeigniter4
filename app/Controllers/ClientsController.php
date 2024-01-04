<?php

namespace App\Controllers;

use App\Controllers\BaseController;
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
}