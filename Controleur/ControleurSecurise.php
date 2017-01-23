<?php

require_once 'Framework/Controleur.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControleurSecurise
 *
 * @author Sony
 */
abstract class ControleurSecurise extends Controleur {

    public function executerAction($action) {
// Vérifie si les informations utilisateur sont présents dans la session
// Si oui, l'utilisateur s'est déjà authentifié : l'exécution de l'action
// continue normalement
// Si non, l'utilisateur est renvoyé vers le contrôleur de connexion
        if ($this->requete->getSession()->existeAttribut("idUtilisateur")) {
            parent::executerAction($action);
        } else {
            $this->rediriger("connexion");
        }
    }
}
