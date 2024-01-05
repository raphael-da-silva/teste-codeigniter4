<?php

namespace App\Models;

use stdClass;

// Teste da vaga de Codeigniter - Raphael da Silva
class UserCredentials
{
    private $db;

    public function __construct()
    {
        $this->db = db_connect();
    }

    public function getUser(string $email): ?stdClass
    {
        $getUser = $this->db->query('SELECT name, email, password FROM users WHERE email = :email: LIMIT 1', [
            'email' => $email
        ]);

        return $getUser->getRowObject();
    }
}