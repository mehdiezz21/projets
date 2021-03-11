<?php

$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre_cine', 'root', '');

if(isset($_POST['forminscription']))
{

$pseudo = htmlspecialchars($_POST['pseudo']);
$mail = htmlspecialchars($_POST['mail']);
$password = sha1($_POST['password']);
$password2 = sha1($_POST['password2']);

    if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['password'])  AND !empty($_POST['password2']))
    {
        if($password == $password2)
        {
            $insertmbr = $bdd->prepare("INSERT INTO membres(pseudo, mail, password) VALUES(?, ?, ?)");
            $insertmbr->execute(array($pseudo, $mail, $password));
            $erreur = "compte bon <a href=\"connexion.php\"> Me connecter</a>";
        }
        else
        {
            $erreur ="mot de passe ne correspondent pas";
        }
        

    }
    else
    {
        $erreur = "remplir tous les champs";
    }
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
            <p>Inscription</p>
                <form method="POST" action="">

                <label>Pseudo:</label>
                <input type="text" name="pseudo" placeholder="Choisissez un pseudo" value="" />

                <label>Mail:</label>
                <input type="mail" name="mail" placeholder="Choisissez un mail" value="" />

                <label>Mot de passe:</label>
                <input type="password" name="password" value="" />
                
                <label>Confirmer mot de passe Mot de passe:</label>
                <input type="password" name="password2" value="" />

                <input type="submit" name="forminscription" value="Créer un compte" />
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
        