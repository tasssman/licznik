<?php

namespace App\Models;

use CodeIgniter\Model;

class PointsModel extends Model
{
    protected $table      = 'points';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $useSoftDeletes = true;
    protected $allowedFields = ['user_id', 'name', 'address'];
    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $skipValidation     = false;

    public function GetAllPoints()
    {
        return $query = $this->findAll();
    }
}