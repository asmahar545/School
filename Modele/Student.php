<?php

/**
 * Created by PhpStorm.
 * User: Asmae
 * Date: 18/01/2017
 * Time: 13:48
 */
require_once 'Framework/Modele.php';

class Student extends Modele{

public function getnbstudents(){


        $rqt='select count(*) as nb from eleve';

        $rep=  $this->executerRequete($rqt);
        $ligne= $rep->fetch();
        return $ligne['nb'];
    }
    public function getStudents()
    {
        $sql = "select * from eleve";
        $student= $this->executerRequete($sql);
        return $student;
    }
    //ajouter un étudiant
    public function addChildren($name,$firstname,$adress,$birthday,$sexe,$phone,$id_classe)
    {
        $sql="INSERT INTO `eleve` (`id_student`, `name`, `firstName`, `adress`, `birthday`, `sexe`, `phone`, `id_classe`) VALUES (NULL,?,?,?,?,?,?,?)";
        $rep=$this->executerRequete($sql,array($name,$firstname,$adress,$birthday,$sexe,$phone,$id_classe));
    }
    
    public function editChildren($name,$firstname,$adress,$birthday,$sexe,$phone,$id_classe,$id)
    {
    $sql="UPDATE `eleve` SET `name` = ?, `firstName` = ?, `adress` = ?, `birthday` = ?, 
          `sexe` = ?, `phone` = ?, `id_classe` = ? WHERE `eleve`.`id_student` = ?";
    $rep=$this->executerRequete($sql,array($name,$firstname,$adress,$birthday,$sexe,$phone,$id_classe,$id));
    }

}