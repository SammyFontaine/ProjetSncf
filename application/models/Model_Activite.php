<?php

 class Model_Activite extends CI_Model
{
    public function GetAllactivite()
    {
        $sql = $this->db->query("SELECT * FROM activite");

        return $sql->result();
    }

}