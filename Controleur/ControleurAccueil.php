<?php

require_once 'Framework/Controleur.php';



/**
 * Contrôleur de la page d'accueil
 * 
 * @author Baptiste Pesquet
 */
class ControleurAccueil extends Controleur  {



    
    /**
     * Affiche la page d'accueil
     */
    public function index() {

        $this->genererVue();

    }



}
