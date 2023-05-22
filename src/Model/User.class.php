<?php 
namespace Run\Model;


 class User{

    public function getAllUser(){
        $sql="SELECT code, nom, prenom FROM etudiant" ;
        return $sql;
    }
    public function setUser($valeur1,$valeur2,$valeur3){
        $sql="INSERT INTO etudiant(code, nom, prenom) VALUES ('".$valeur1."','".$valeur2."','".$valeur3."')";
        return $sql;
    }
    public function deleteUser($value){
        $sql ="DELETE FROM etudiant WHERE code ='".$value."'";
        return $sql;
    }
}