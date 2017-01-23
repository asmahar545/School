<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/Utilisateur.php';
require_once 'Framework/Vue.php';
require_once 'Modele/Adult.php';

/**
 * Contrôleur gérant la connexion au site
 *
 * @author Baptiste Pesquet
 */
class ControleurConnexion extends Controleur
{
    private $adult;

    public function __construct()
    {
        $this->adult = new Adult();
        $this->utilisateur = new Utilisateur();
    }

    public function index()
    {
        $this->genererVue();
    }

    public function connecter()
    {
        if ($this->requete->existeParametre("login") &&
            $this->requete->existeParametre("mdp")
        ) {
            $login = $this->requete->getParametre("login");
            $mdp = $this->requete->getParametre("mdp");

            if ($this->utilisateur->connecter($login, $mdp)) {

                //si il est admin
                if ($login == "h.asmaae545@gmail.com" && $mdp == "asmae545") {
                    $utilisateur = $this->utilisateur->getUtilisateur($login, $mdp);

                    $this->requete->getSession()->setAttribut("idUtilisateur",
                        $utilisateur['idUtilisateur']);
                    $this->requete->getSession()->setAttribut("login", $utilisateur['login']);
                    $this->rediriger("Admin");
                }  //si il est un des menbres du personnel
                else {
                    $utilisateur = $this->utilisateur->getUtilisateur($login, $mdp);

                    $this->requete->getSession()->setAttribut("idUtilisateur",
                        $utilisateur['idUtilisateur']);
                    $this->requete->getSession()->setAttribut("login", $utilisateur['login']);
                    $this->rediriger("Teacher");
                }

            } else
                $this->genererVue(array('msgErreur' =>
                    'Login ou mot de passe incorrects'), "index");
        } else
            $this->genererVue(array('msgErreur' =>
                'Login ou mot de passe non défini'), "index");

    }

    public function deconnecter()
    {
        $this->requete->getSession()->detruire();
        $this->rediriger("Accueil");
    }
}

