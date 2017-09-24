
<?php


class CtrlAccueilSncf extends CI_Controller
{
    public function index()
    {
        $data['titre'] = "Les activités";

        $this->load->model("Model_Activite");

        $data['lesActivites'] = $this->Model_Activite->GetAllactivite();

        $this->load->view("v_accueilSncf",$data);
    }

    public function AfficherLesFormations()

    {
        $lActivite = $this->uri->segment(3);

        $this->load->model("Model_Formation");

        //Appel de la méthode
        $data['lesFormation'] = $this->Model_Formation->GetAllFormations($lActivite);

        //Appel de la vue
        $this->load->view("v_formation",$data);

    }
    
    public function AfficherLesAgents()
            
    {
        $codeFormation = $this->uri->segment(3);
        
        $this->load->Model("Model_Agent");
        
        $data['lesAgents'] = $this->Model_Agent->GetAllAgents($lAgent);
        
        $this->load->view(v_agent,$data);
    }

}