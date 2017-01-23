<?php

require_once 'Framework/Modele.php';

class Classe extends Modele{

//nombre de classe
public function getnbClasses()
    {

        $rqt='select count(*) as nb from classe';

        $rep=  $this->executerRequete($rqt);
        $ligne= $rep->fetch();
        return $ligne['nb'];
    }
//liste des classe de l'école

    public function getClasses()
    {
        $sql = "select * from classe";
        $class= $this->executerRequete($sql);
        return $class;
    }
//ajouter une classe

 public function addClasse($name)
{
    $sql='INSERT INTO `classe` (`id_classe`, `yearSexion`) VALUES (NULL, ?)';

    $rep=$this->executerRequete($sql,array($name));
}
public function editClasse($name,$id)
{
    $sql="UPDATE `classe` SET `yearSexion` = ? WHERE `classe`.`id_classe` = ?";
    $rep=$this->executerRequete($sql,array($name,$id));
}
}