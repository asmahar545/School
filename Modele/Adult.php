<?php


require_once 'Framework/Modele.php';

class Adult extends Modele
{
    //return un tout les adults
    public function getAdults()
    {
        $sql = "select * from adult";
        $personnel= $this->executerRequete($sql);
        return $personnel;
    }
    //return une seul adult

    public function getadult($id)
    {

        $sql="select * from adult where id_adult= $id";
        $rep=  $this->executerRequete($sql);
        $ligne= $rep->fetch();
        return $ligne;
    }

    //return le nombre d'adult

    public function getnbadults()
    {

        $rqt='select count(*) as nb from adult ';

        $rep=  $this->executerRequete($rqt);
        $ligne= $rep->fetch();
        return $ligne['nb'];
    }
    //ajoute un adult
    public function addAdult($name,$firstname,$adress,$birthday,$sexe,$phone,$email,$password,$id_adultCategory)
    {
        $sql='INSERT INTO `adult` (`id_adult`, `name`, `firstname`, `adress`, `birthday`, `sexe`, `phone`, `email`, `password`, `id_adultCategory`)  VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?,?)';

        $rep=$this->executerRequete($sql,array($name,$firstname,$adress,$birthday,$sexe,$phone,$email,$password,$id_adultCategory));
    }

    //return tableau de catégory 
    public function  getCat(){
        $sql="select * from adultcategory";
        $cat= $this->executerRequete($sql);
        return $cat;
        
    }
    //modifie l'adult
    public function editAdult($name,$firstname,$adress,$birthday,$sexe,$phone,$email,$password,$id_adultCategory,$id){
        $sql="UPDATE `adult` SET `name` = ?, `firstname` = ?, `adress` = ?, 
        `birthday` = ?, `sexe` = ?, `phone` = ?,
        `email` = ?, `password` = ?,
        `id_adultCategory` = ? WHERE `adult`.`id_adult` = ?";
        
        $rep=$this->executerRequete($sql,array($name,$firstname,$adress,$birthday,$sexe,$phone,$email,$password,$id_adultCategory,$id));
    }
}