<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre_cine', 'root', '');


if(isset($_GET['id']) AND $_GET['id'] > 0)
{
    $getid = intval($_GET['id']);
    $requser = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
    $requser->execute(array($getid));
    $userinfo = $requser->fetch();
    $list_film = $bdd->prepare('SELECT  * FROM film WHERE id = ? ORDER BY id DESC');
    $list_film->execute(array($getid));

   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Juno</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>
    <body>
        <div class="container">
            <div class="top">
                <div>
                     <img src="images/popcorn.png" alt="" class="logo" title="logo" width="100%">
                </div>
                <nav class="menu">
                    <ul>
                        <li><a href="connexion.php" >Connexion</a></li>
                        <li><a href="edition_profil.php" >Edition profil</a></li>
                        <li><a href="inscription.php" >Inscription</a></li>
                        <li><a href="film.php?id=<?php echo $_SESSION['id']?>" >Poster un film</a></li>
                        <li><a href="deconnexion.php" >Déconnexion</a></li>
                        <li><a href="list_film.php" >Liste des films</a></li>
                        <li><a href="profil.php?id=<?php echo $_SESSION['id']?>" >Profil</a></li>
                        
                    </ul>
                </nav>
                <div class="mail">
                    <img src="images/mail.png" alt="mail" title="mail" width="100%">
                </div>
            </div>
            <div class="divtitre">
                <h1>Yciné</h1>

            </div>

            <p>Profil de <?php echo $userinfo['pseudo']; ?></p>
            <p>Entreprise = <?php echo $userinfo['pseudo']; ?></p>
            <p>Mail = <?php echo $userinfo['mail']; ?></p>
            

            <?php
            if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id'])
            {
            ?> 
                <a href="edition_profil.php">Editer mon profil</a>
                <a href="deconnexion2.php">Se deconnecter</a>
                <a href=film.php?id=<?php echo $userinfo['id']?>> Ecrire film</a></p>
                <h2>Mes films</h2>
                <ul>
                <?php while($o= $list_film->fetch()) { ?>
                    <li><?= $o['idi'] ?> : <?= $o['nom_film'] ?> <a href="supprimer.php?supprime=<?php echo $o['idi'] ?>">Supprimer </a></li>
                <?php } ?>
                </ul>
                <?php
                if(isset($erreur))
                {
                    echo $erreur;
                }
                ?>
            <?php
            }
            ?>

            </div>
            <div class="divend">
                <h2>Distribution</h2>
                <p>Produit pour ynov Bordeaux</p>
            </div>
            <div class="bottom">
                <div class="bottom1">
                    <ul>
                        <li><a href="https://www.twitter.com" target="_blank">Twitter </a></li>
                        
                    </ul>
                </div>
                <div class="bottom2">
                    <ul>
                        <li><a href="https://www.instagram.com" target="_blank">instagram </a></li>
                       
                    </ul>
                </div>
                <div class="bottom3">
                    <ul>
                        <li><a href="https://www.facebook.fr" target="_blank">Facebook </a></li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>

<?php
}
?>