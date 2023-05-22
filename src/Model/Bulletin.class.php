<?php 
    namespace Run\Model;
    class Bulletin {

        public function allNoteUser($value){
            $sql="SELECT matiere.matiere, note.note, note.coef
            FROM
                note
            JOIN matiere
                ON matiere.id = note.idMatiere
            WHERE note.idCode ='".$value."'";
            return $sql;
        }
        public function allmatiere(){
            $sql ="SELECT id, matiere FROM matiere WHERE id != 1";
            return $sql;
        }

        public function setNote($value1,$value2,$value3,$value4){
            $sql = "INSERT INTO note ( idCode, idMatiere, coef, note) VALUES ('".$value1."','".$value2."','".$value3."','".$value4."')";
            return $sql;
        }
        public function moyennecreate($code){
            $sql = "INSERT INTO note ( idCode, idMatiere) VALUES ('".$code."',1)";
            return $sql;
        }
        public function setMatiere($value){
            $sql = "INSERT INTO matiere( matiere) VALUE ('".$value."')";
            return $sql;
        }
    }