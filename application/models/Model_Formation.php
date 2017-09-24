<?php


class Model_Formation extends CI_Controller
{
    
    public function GetAllFormations($numero)
    {
        $sql = $this->db->query("SELECT * FROM formation WHERE numeroActivite =".$numero);

        return $sql->result();
    }

}
