<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre_cine', 'root', '');
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
            <div class="topimage">
                <img src="images/cinema.jpg" alt="bureau" title="bureau" width="100%">
            </div>
            <div class="divmiddle">
                <img src="images/sept.jpg" alt="image A" title="image A" width="100%">
                <div class="textmiddle">
                <h2 class="h2middle">Catalogue</h2>
                <p class="pmiddle">L'objectif de ce site en devenir est de construire une communauté active fan de cinéma.</p>
                </div>
            </div>

            <div class="divimage">
                <div class="block1">
                    <div class="div1">
                        <div class="text">
                            <h3>Judéaux Idryss</h3>
                            <p>Co-fondateur</p>
                            <a href="https://www.google.fr" target="_blank"><p class="rose">judéaux.ydriss@gmail.com</p></a>
                            <a href="https://www.google.fr" target="_blank"><img src="images/network.png" alt="network" title="network" width="100%"></a>
                        </div>
                    </div>
                    <div class="div2">
                    </div>
                    <div class="div3">
                        <div class="text">
                            <h3>Ovni</h3>
                            <p>Co-fondateur</p>
                            <a href="https://www.google.fr" target="_blank"><p class="rose">ovni@gmail.com</p></a>
                            <a href="https://www.facebook.fr" target="_blank"><img src="images/network.png" alt="network" title="network" width="100%"></a>
                        </div>
                    </div>
                </div>
                <div class="block2">
                    <div class="div4">

                    </div>
                    <div class="div5">
                        <div class="text">
                            <h3>Ezzahi Mehdi</h3>
                            <p>Co-fondateur</p>
                            <a href="https://www.google.fr" target="_blank"><p class="rose">ezzahi.mehdi@gmail.com</p></a>
                            <a href="https://www.facebook.fr" target="_blank"><img src="images/network.png" alt="network" title="network" width="100%"></a>
                        </div>
                    </div>
                    <div class="div6">
                    </div>
                </div>
            </div>
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