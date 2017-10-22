<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Medicament_Ivan extends CI_Model{
    
    public function getAllMedicament(){
        $sql=$this->db->query("select MED_NOMCOMMERCIAL, MED_DEPOTLEGAL  from medicament");
        return $sql->result();
    }
    
    public function getComposantMeds($MED_NOMCOMMERCIAL){
        $sql = $this->db->query("SELECT * FROM  constituer, composant where constituer.CMP_CODE=composant.CMP_CODE AND MED_DEPOTLEGAL='".$MED_NOMCOMMERCIAL."'");
        return $sql->result();
    }
    //  SELECT * FROM medicament, constituer, composant where medicament.MED_DEPOTLEGAL=constituer.MED_DEPOTLEGAL AND constituer.CMP_CODE=composant.CMP_CODE
    
    public function insertMedicComposants($medicament,$composant,$CST_QTE){
         $sql = $this->db->query("INSERT INTO constituer values('".$medicament."','".$composant."','".$CST_QTE."')"); 
        //$this->db->insert("constituer", $data);
        //INSERT INTO `constituer` (`MED_DEPOTLEGAL`, `CMP_CODE`, `CST_QTE`) VALUES ('', '', NULL);
    }
}