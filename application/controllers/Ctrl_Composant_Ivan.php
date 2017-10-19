<?php
class Ctrl_Composant_Ivan extends CI_Controller {
        function __construct() { 
         parent::__construct(); 
         //$this->load->helper('url'); 
        // $this->load->database();
         $this->load->model("Model_Composant_Ivan");
         $this->load->model("Model_Medicament_Ivan");
        } 
     
	public function index()
	{
	    $this->load->view('v_acceuil');
	}
        
        public function AfficherPageList(){
           // $this->load->helper('url'); 
            $this->load->model("Model_Composant_Ivan");
            $data['lesComposants']=$this->Model_Composant_Ivan->getAllComposants();
            $this->load->view('v_listC',$data);
            
        }
  
        public function ajouterComposant() { 
              $this->load->model("Model_Composant_Ivan");
              $data['leDernierComposants']=$this->Model_Composant_Ivan->getLastCode();
              $this->load->view('v_ajouterComposant',$data); 
        }                                   
      
        public function form_composant(){
          //  $this->ValiderFormHome();
                  if($this->form_validation->run()==TRUE)
                  {
                          $data['lesComposants']=$this->Model_Composant_Ivan->getAllComposants();
                          $data['leDernierComposants']=$this->Model_Composant_Ivan->getLastCode();
                          $this->load->view('v_ajouterComposant', $data);
                  }
                  else{
                      $this->load->model("Model_Composant_Ivan");
                      $data = array( 
                      'CMP_CODE'       => $this->input->post('CMP_CODE'), 
                      'CMP_LIBELLE'    => $this->input->post('CMP_LIBELLE') 
                        ); 
//                        print_r($data);
//                        die;
                      $data1 = array( 
                      'CMP_LIBELLE'    => $this->input->post('CMP_LIBELLE') 
                        ); 
                      $libl = $data1['CMP_LIBELLE'];
                      //print_r($libl);
                        
                        if($this->input->post('Modifier'))
                        {
                            
                            $this->Model_Composant_Ivan->editComposant($libl, $this->input->post('hidden_id'));
                            redirect(base_url()."index.php/Ctrl_Composant_Ivan/modife");
                        }
                        if($this->input->post('btnValider'))
                         {
                        
                            $this->Model_Composant_Ivan->insertComposants($data);
                            $data['lesComposants']=$this->Model_Composant_Ivan->getAllComposants();
                            $this->load->view('v_listC',$data);
                         }
                  }
        }
        public function ValiderFormHome()
	{
		$this->form_validation->set_error_delimiters('<div class=error>','</div>');
		$this->form_validation->set_rules("CMP_CODE", "Ajouter un code de composant", "required");
                $this->form_validation->set_rules("CMP_LIBELLE", "Ajouter une libellé de composant", "required");	
	}
        
        public function mod_composant(){
            $CMP_CODE = $this->uri->segment(3);
            $this->load->model("Model_Composant_Ivan");
            $data["unComposant"] = $this->Model_Composant_Ivan->unComposant($CMP_CODE);
            //$data['lesComposants']=$this->Model_Composant_Ivan->getAllComposants();
            $this->load->view("v_ajouterComposant",$data);
        }
        
        public function modife(){
            $this->AfficherPageList();
        }
        
        public function afficherMedicaments(){
           $data['lesMedicaments'] =$this->Model_Medicament_Ivan->getAllMedicament();
           $this->load->view('v_listeCompMods',$data);
        }

     
        
      
}