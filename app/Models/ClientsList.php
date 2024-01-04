<?php

namespace App\Models;

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
}