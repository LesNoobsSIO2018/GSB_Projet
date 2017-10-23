<?php

class Model_Composant_Ivan extends CI_Model{
     function __construct() { 
         parent::__construct(); 
      } 
     
    public function getAllComposants(){
        $sql=$this->db->query("select * from composant");
        return $sql->result();
    }
    public function getLastCode(){
        $sql=$this->db->query("select max(CMP_CODE) FROM composant");
        return $sql->result();
    }
    public function insertComposants($data) { 
        $this->db->insert("composant", $data); 
    }
    
    public function unComposant($CMP_CODE){
        $this->db->where('CMP_CODE',$CMP_CODE);
        $query = $this->db->get('composant');
        return $query->result();
    }
    
    public function editComposant($data, $CMP_CODE){
//        $this->db->where('CMP_CODE',$CMP_CODE);
//        $this->db->update("composant",$data);
          $this->db->query("UPDATE composant SET CMP_LIBELLE='".$data."' WHERE CMP_CODE ='".$CMP_CODE."'");
    }
}
        
     
   