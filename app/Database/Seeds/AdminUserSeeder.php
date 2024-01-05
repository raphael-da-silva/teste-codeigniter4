<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

// Criação do usuário padrão de login
final class AdminUserSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('users')->insert([
            'name'     => 'ADMINISTRADOR',
            'email'    => 'admin@admin.com',
            'password' => password_hash('admin', PASSWORD_DEFAULT)
        ]);
    }
}