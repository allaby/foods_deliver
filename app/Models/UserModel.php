<?php

namespace App\Models;

use Exception;

class UserModel extends BaseModel
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

    public function checkEmail($email)
    {
        try {
            $query = "SELECT * FROM $this->user_tb WHERE $this->user_tb.email = '$email'";
            // debug($query);exit;
            $result = $this->fetchAll($query);
            return $result;
        } catch (Exception $e) {
            return $e;
        }
    }

    public function addUser($data)
    {
        $this->db->table($this->user_tb)->insert($data);
        $result['result'] = true;
        $result['lastID'] = $this->db->insertID();
        return $result;
    }

    public function last_login($data,$id){
        $this->builder->where('user_id',$id);
        $this->builder->update($data);
        return true;
    }
}
