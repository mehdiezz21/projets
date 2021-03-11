<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre_cine', 'root', '');

if (isset($_GET['supprime']) AND !empty($_GET['supprime']))
    {
        $supprime= (int) $_GET['supprime'];
        $req= $bdd->prepare('DELETE FROM film WHERE idi=?' );
        $req->execute(array($supprime));
        header('Location: profil.php?id='.$_SESSION['id']);
    }
?>