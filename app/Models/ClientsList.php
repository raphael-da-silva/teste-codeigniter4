<?php

namespace App\Models;

use stdClass;

// Teste da vaga de Codeigniter - Raphael da Silva
class ClientsList
{
    private $db;

    public function __construct()
    {
        $this->db = db_connect();
    }

    public function getAll(): array
    {
        $list = $this->db->query('SELECT id, name, email, phone, address FROM clients');
        $list = $list->getResultObject();

        return $list;
    }

    public function getById(int $id): ?stdClass
    {
        $client = $this->db->query('SELECT id, name, email, phone, address FROM clients WHERE id = :id:', [
            'id' => $id
        ]);

        if ($client->getNumRows() == 1){
            return $client->getResultObject()[0];
        }

        return null;
    }
}