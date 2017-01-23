<?php

require_once 'Controleur.php';
require_once 'Requete.php';
require_once 'Vue.php';

class Routeur {
    /* La méthode principale routerRequete() de cette classe instancie un objet Requete en fusionnant les données des
      variables superglobales $_GET et $_POST, afin de pouvoir analyser toute requête issue soit d'une commande HTTP
      GET, soit d'une commande HTTP POST.cette méthode fait appel à deux méthodes internes afin d'instancier le contrôleur approprié et d'exécuter
      l'action correspondant à la requête reçue. */

    public function routerRequete()
    {
        try {
            // Fusion des paramètres GET et POST de la requête
            // Permet de gérer uniformément ces deux types de requête HTTP
            $requete = new Requete(array_merge($_GET, $_POST));

            $controleur = $this->creerControleur($requete);
            $action = $this->creerAction($requete);

            $controleur->executerAction($action);
        }
        catch (Exception $e) {
            $this->gererErreur($e);
        }
    }

// Crée le contrôleur approprié en fonction de la requête reçue
    /* La méthode creerControleur() récupère le paramètre controleur de la requête reçue et le concatène pour construire
      le nom du fichier contrôleur (celui qui contient la classe associée) et renvoyer une instance de la classe associée.
      En l'absence de ce paramètre, elle cherche à instancier la classe ControleurAccueil qui correspond au contrôleur
      par défaut. */
    private function creerControleur(Requete $requete) {
        $controleur = "Accueil"; // Contrôleur par défaut
        if ($requete->existeParametre('controleur')) {
            $controleur = $requete->getParametre('controleur');
// Première lettre en majuscule
            $controleur = ucfirst(strtolower($controleur));
        }
// Création du nom du fichier du contrôleur
        $classeControleur = "Controleur" . $controleur;
        $fichierControleur = "Controleur/" . $classeControleur . ".php";
        if (file_exists($fichierControleur)) {
// Instanciation du contrôleur adapté à la requête
            require($fichierControleur);
            $controleur = new $classeControleur();
            $controleur->setRequete($requete);
            return $controleur;
        } else {
            throw new Exception("Fichier '$fichierControleur' introuvable");
        }
    }

// Détermine l'action à exécuter en fonction de la requête reçue
    /* La méthode creerAction() récupère le paramètre action de la requête reçue et le renvoie. En l'absence de ce
      paramètre, elle renvoie la valeur « index » qui correspond à l'action par défaut.
      Cela n'est possible qu'en imposant à tous les contrôleurs des contraintes de nommage strictes : chaque contrôleur doit
      résider dans le sous-répertoire Controleur/ sous la forme d'un fichier définissant une classe nommée ControleurXXX
      (XXX correspondant à la valeur du paramètre controleur dans la requête). Le fichier doit porter le même nom que
      la classe */
    private function creerAction(Requete $requete) {
        $action = "index"; // Action par défaut
        if ($requete->existeParametre('action')) {
            $action = $requete->getParametre('action');
        }
        return $action;
    }

// Gère une erreur d'exécution (exception)
    /* Enfin, la méthode privée gererErreur() permet d'afficher la vue d'erreur. */
    private function gererErreur(Exception $exception) {
        $vue = new Vue('erreur');
        $vue->generer(array('msgErreur' => $exception->getMessage()));
    }

}
