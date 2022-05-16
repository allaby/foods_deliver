<?php

namespace App\Models;

use Exception;

class RecipeeModel extends BaseModel
{

    public function fetchAll($query)
    {
        $sql = $this->db->query($query);
        $data = $sql->getResult();
        $rows = $sql->getNumRows();
        $array = array(
            'data' => $data,
            'rows' => $rows
        );
        return $array;
    }


    public function addRecipee($data){
        $this->db->table($this->recipee_tb)->insert($data);
        $result['result'] = true;
        $result['lastID'] = $this->db->insertID();
        return $result;
    }


    public function addIngredient($data){
        $this->db->table($this->ingredient_tb)->insert($data);
        $result['result'] = true;
        $result['lastID'] = $this->db->insertID();
        return $result;
    }

    public function getIngrbyName($ingredient_name){
        try {
            $query = "SELECT * FROM ingredients WHERE title = '$ingredient_name' ";
            $result = $this->fetchAll($query);
            return $result;
        } catch (Exception $e) {
            return $e;
        }
    }






}
