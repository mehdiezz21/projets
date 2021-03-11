<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre_cine', 'root', '');


if(isset($_POST['formfilm']))
    {
    $getid = intval($_GET['id']);
    $requser = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
    $requser->execute(array($getid));
    $userinfo = $requser->fetch();
    $film = htmlspecialchars($_POST['film']);
    $description = htmlspecialchars($_POST['description']);
    $acteur = htmlspecialchars($_POST['acteur']);
    $date = htmlspecialchars($_POST['date']);
    $note = htmlspecialchars($_POST['note']);
    $origine = htmlspecialchars($_POST['origine']);
    if(!empty($_POST['film']))
        {
            $insertoffre = $bdd->prepare("INSERT INTO film(id, description, nom_film, acteur, date, note, origine) VALUES(?, ?, ?, ?, ?, ?, ?)");
            $insertoffre->execute(array($userinfo['id'], $description, $film, $acteur, $date, $note, $origine));
            header('Location: list_film.php?id='.$_SESSION['id']);
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
            <form method="POST" action="">
                    
                    <label>Nom film:</label>
                    <input type="text" name="film" placeholder="Entrez le nom du film" value="" />
        
                    <label>Description:</label>
                    <textarea type="text" name="description" placeholder="Ecrire une description" value=""></textarea>
                    
                    <label>Acteurs:</label>
                    <input type="text" name="acteur" placeholder="Entrez les acteurs" value="" />
                    
                    <label>Date:</label>
                    <input type="text" name="date" placeholder="Entrez la date du film" value="" />

                    <label>Note:</label>
                    <input type="text" name="note" placeholder="Entrez note sur 10" value="" />
        
                    <label>Origine:</label>
                    <input type="text" name="origine" placeholder="Entrez l'origine" value="" />

                    <input type="submit" name="formfilm" value="Valider" />
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
