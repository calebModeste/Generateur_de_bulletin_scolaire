<?php 
namespace Run\Model;


 class User{

    public function getAllUser(){
        $getUsers="SELECT code, nom, prenom FROM etudiant" ;
        return $getUsers;
    }
    public function setUser($valeur1,$valeur2,$valeur3){
        $setUser="INSERT INTO etudiant(code, nom, prenom) VALUES ('".$valeur1."','".$valeur2."','".$valeur3."')";
        //$setUser="INSERT INTO etudiant(code, nom, prenom) VALUES ('L3C011','refiod','".$valeur2."','".$valeur3."')";

        echo "inscription reussi";
        return $setUser;
    }
    public function deleteUser($value){
        $deleteUser ="DELETE FROM etudiant WHERE code ='".$value."'";
        return $deleteUser;
    }
}