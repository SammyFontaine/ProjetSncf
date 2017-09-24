<?php

class Model_Agent extends CI_Contoller
    
{
    public function GetAllAgents()
    {
        $sql = $this->db->query("SELECT prenom, nom FROM agent, inscription WHERE Agent.code = inscription.codeAgent AND numeroFormation='".$nuemroFormation."'");

        return $sql->result();
    }

}