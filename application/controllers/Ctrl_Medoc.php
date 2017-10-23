<?php
class Ctrl_Medoc extends CI_Controller
{
      public function index()
    {
            $this->load->view("view_Accueil");  
    }
  public function getIndividus()
        {
            $this->load->model("Model_TypeIndividu");
            $data['lesIndividus'] = $this->Model_TypeIndividu->getIndividus();
            $this->load->view("v_TypeIndividu",$data);
        }
public function creerIndividu()
        {
            $data=$_POST['libelle'];    
            $data2=$_POST['code'];
            $this->load->model("Model_TypeIndividu");
            $this->Model_TypeIndividu->creerIndividu($data2,$data);
            $this->creerIndividus();
        }
            
public function modifIndividu()
        {
            $data=$_POST['nvlibelle'];
            $data2=$_POST['code'];
            $this->load->model("Model_TypeIndividu");
            $this->Model_TypeIndividu->modifIndividu($data,$data2);
          
        } 
public function getAllMedicaments()
        {
            $this->load->model("Model_Medoc");
            $data['lesMedicaments'] = $this->Model_Medoc->getAllMedicaments();
            $this->load->view("v_Medoc",$data);
        }
public function creerMedicament()
        {
            $depot = $_POST['depot'];
            $nom = $_POST['nom'];
            $code = $_POST['code'];
            $compo = $_POST['composition'];
            $effets = $_POST['effets'];
            $contreindic = $_POST['contre'];
            $prix = $_POST['prix'];
            $this->load->model("Model_Medoc");
            $this->Model_Medoc->creerMedicament($depot,$nom,$code,$compo,$effets,$contreindic,$prix);
        }
public function modifMedicament()
        {
            $depot = $_POST['depot'];
            $nom = $_POST['nom'];
            $code = $_POST['code'];
            $compo = $_POST['composition'];
            $effets = $_POST['effets'];
            $contreindic = $_POST['contre'];
            $prix = $_POST['prix'];
            $this->load->model("Model_MedicamentPC");
            $this->Model_MedicamentPC->modifMedicament($depot,$nom,$code,$compo,$effets,$contreindic,$prix);
        }
        
        }
        ?>


   