<?php

require_once File::build_path(array("Model", "model.php"));

class UserController{

    static function userRoute(){
        $controller = 'user';
        $view = 'login';
        $pagetitle = 'Cristiano Ronaldo - Connexion';
        $description ='Page connexion de mon site';
        $Css = ['contact'];
        require File::build_path(array("View", "base.php"));
    }

    static function connexion(){
        $login = $_POST['login'];
        $password = $_POST['password'];
        
        $pdo = Model::connectMySQL();        

        // Préparer la requête pour éviter les injections SQL
        $requete = "SELECT * FROM user WHERE login = :login";
    
        try {
            // Exécuter la requête
            $stmt = $pdo->prepare($requete);
            $stmt->bindParam(':login', $login);
            $stmt->execute();
    
            // Récupérer l'utilisateur
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
            // Vérifier si l'utilisateur existe
            if ($user && isset($password, $user['password'])) {
                // Connexion réussie
                //$_SESSION['user_logged_in'] = true;
                //$_SESSION['user_name'] = $user['nom']; // Optionnel : stocke le nom de l'utilisateur
                $controller = 'admin';
                $view = 'admin_page';
                $pagetitle = 'Cristiano Ronaldo - Administrateur';
                $description ='Page administration';
                require File::build_path(array("View", "base.php"));
                
                exit();
            } else {
                // Identifiant ou mot de passe incorrect
                echo "Identifiant ou mot de passe incorrect.";
            }
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }

    static function deconnexion(){
        $_SESSION = []; // Vide la session
        session_destroy(); // Détruit la session

        // Redirige vers la page d'accueil
        header('Location: ?controller=accueil&action=index'); // Changez ceci en 'accueil.html' si c'est le nom de votre page d'accueil
        exit();
    }


}