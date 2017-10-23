<?php
class Model_Prescription extends CI_Model{
    public function getPrescription(){
        $sql=$this->db->query("select * from prescrire");
        return $sql->result();
    }
}
