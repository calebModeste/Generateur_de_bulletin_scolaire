<?php 
    namespace Run\Model;
    class Bulletin {

        public function allNoteUser($value){
            $getNotes="SELECT matiere.matiere, note.note, note.coef
            FROM
                note
            JOIN matiere
                ON matiere.id = note.idMatiere
            WHERE note.idCode ='".$value."'";
            return $getNotes;
        }
        public function allmatiere(){
            $getMatiere ="SELECT id, matiere FROM matiere WHERE id != 1";
            return $getMatiere;
        }

        public function setNote($value1,$value2,$value3,$value4){
            $setnote = "INSERT INTO note ( idCode, idMatiere, coef, note) VALUES ('".$value1."','".$value2."','".$value3."','".$value4."')";
            return $setnote;
        }
    }