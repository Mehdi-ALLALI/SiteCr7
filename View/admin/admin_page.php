<?php
//session_start();

/*if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: admin_login.html');
    exit();
}*/
?>
<section id="admin-dashboard">
    <h2>Tableau de bord d'administration</h2>
    <ul>
        <li><a href="#">Gérer la page d'accueil</a></li>
        <li><a href="#">Gérer la page biographie</a></li>
        <!-- Ajoute d'autres options d'administration ici -->
    </ul>
    <a href="?controller=User&action=deconnexion">Se déconnecter</a>
</section>