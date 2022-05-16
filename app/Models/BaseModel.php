<?php

namespace App\Models;

use CodeIgniter\Model;

class BaseModel extends Model
{

    public $user_tb = "users";
    public $recipee_tb = "recipes";
    public $ingredient_tb = "ingredients";

    public function __construct()
    {
        $this->db = db_connect();
        $this->session = \Config\Services::session();
        $this->builder = $this->db->table($this->user_tb);
    }
}
