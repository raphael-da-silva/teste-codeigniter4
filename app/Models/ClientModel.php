<?php

namespace App\Models;

use CodeIgniter\Model;

// Teste da vaga de Codeigniter - Raphael da Silva
class ClientModel extends Model
{
    protected $table            = 'clients';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['name', 'email', 'phone', 'address'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'name'  => 'required|min_length[5]',
        'email' => 'required|valid_email',
        'phone'  => 'required',
        'address' => 'required'
    ];
    protected $validationMessages   = [
        'name'  => [
            'required'   => 'Insira o nome',
            'min_length' => 'Nome muito curto, insira um nome válido'
        ],
        'email' => [
            'required' => 'Insira o e-mail',
            'valid_email' => 'Insira um e-mail valido'
        ],
        'phone' => [
            'required' => 'Insira o telefone'
        ],
        'address' => [
            'required' => 'Insira o endereço'
        ]
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
