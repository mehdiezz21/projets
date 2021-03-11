<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre_cine', 'root', '');

if(isset($_SESSION['id']))
{
    $requser = $bdd->prepare("SELECT * FROM membres WHERE id= ?");
    $requser->execute(array($_SESSION['id']));
    $user = $requser->fetch();

    if(isset($_POST['newpseudo']) AND !empty($_POST['newpseudo']) AND $_POST['newpseudo'] != $user['pseudo'])
    {
        $newpseudo = htmlspecialchars($_POST['newpseudo']);
        $insertpseudo = $bdd->prepare("UPDATE membres SET pseudo = ? WHERE id = ?");
        $insertpseudo->execute(array($newpseudo, $_SESSION['id']));
        header('Location: profil.php?id='.$_SESSION['id']);

    }

    if(isset($_POST['newmail']) AND !empty($_POST['newmail']) AND $_POST['newmail'] != $user['mail'])
    {
        $newmail = htmlspecialchars($_POST['newmail']);
        $insertmail = $bdd->prepare("UPDATE membres SET mail = ? WHERE id = ?");
        $insertmail->execute(array($newmail, $_SESSION['id']));
        header('Location: profil.php?id='.$_SESSION['id']);

    }
    if(isset($_POST['newmdp']) AND !empty($_POST['newmdp']) AND isset($_POST['newmdp2']) AND !empty($_POST['newmdp2']))
    {
        $mdp1 = sha1($_POST['newmdp']);
        $mdp2 = sha1($_POST['newmdp2']);

        if($mdp1 == $mdp2)
        {
            $insertmdp = $bdd->prepare("UPDATE membres SET password = ? WHERE id = ?");
            $insertmdp->execute(array($mdp1, $_SESSION['id']));
            header('Location: profil.php?id='.$_SESSION['id']);
        }
        else
        {
            $msg = "Mot de passe ne correspondent pas";
        }
    }
    if(isset($_POST['newpseudo']) AND $_POST['newpseudo'] == $user['pseudo'])
    {
        header('Location: profil.php?id='.$_SESSION['id']);
    }

    

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
                
            <h1>Edition profil</h1>
            <form method="POST" action="">
                <label>Pseudo:</label>
                <input type="text" name="newpseudo" placeholder="pseudo" value="<?php echo $user['pseudo']; ?>" >
                <label>Mail:</label>
                <input type="mail" name="newmail" placeholder="Mail" value="<?php echo $user['mail']; ?>"/>
                <label>Mot de passe:</label>
                <input type="text" name="newmdp" placeholder="Mot de passe" />
                <label>Confirmer mot de passe:</label>
                <input type="text" name="newmdp2" placeholder="Mot de passe" />
                <input type="submit" value="Mettre à jour mon profil" />
            </form>
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
else
{
    header("Location: connexion.php");
}
?>