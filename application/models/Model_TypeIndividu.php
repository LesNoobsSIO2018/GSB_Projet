<?php
class Model_TypeIndividu extends CI_Model
{
  
    public function getIndividus()
    {
     $sql = $this->db->query("Select * from type_individu");   
        return $sql->result();
    }
    public function creerIndividu($data2,$data)
            {
            $sql = $this->db->query("INSERT INTO type_individu values('".$data2."','".$data."')");  
            
            }
    public function modifIndividu($data,$data2)
            {
            $sql = $this->db->query("UPDATE type_individu SET TIN_LIBELLE='".$data."'WHERE TIN_CODE =".$data2);
            }
}

