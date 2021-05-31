<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../public/css/header.css"/>
</head>

<body>
<nav>
    <div class="logoC">
        <a href="accueilController.php">
            <img src="../public/images/Logo3.png" width="150" alt="logo" class="logo-image">
        </a>
    </div>
    <div class="linkC">
        <a href="decouvrezNousController.php">Nous découvrir</a>
        <a href="presentationTestController.php">Nos tests</a>
        <a href="faqController.php">FAQ</a>
        <a href="messagerieController.php">Nous contacter</a>
    </div>
    <div class="connexionC">
        <div class="IMGC">
            <a href="profilController.php">
                <img class="Bcon" src="../public/images/account.png" width=30 alt="##" />
            </a>
        </div>
        <?php  if (!isset($_SESSION['mail'])){ ?>
        <div class="menuDPasConnecte">
                <div class="bt1">
            <a href="inscriptionAccueilController.php">Inscription</a>
                </div>
            <div class="bt2">
                <a href="connexionController.php">Connexion</a>
            </div>
        </div>
            <?php }
            else{  ?>
            <div class="menuDConnecte">
                <div class="bt1">
                    <a href="profilController.php">Mon profil</a>
                </div>
                <div class="bt1">
                    <a href="faireTestController.php">Faire un test</a>
                </div>
                <div class="bt1">
                <?php    if ($_SESSION['utilisateur']=='client'){ ?>
                    <a href="historiqueTestController.php">Historique</a>
                 <?php } else if($_SESSION['utilisateur']=='gestionnaire'){ ?>
                    <a href="rechercheGestController.php">Rechercher</a>
                <?php } else if($_SESSION['utilisateur']=='administrateur'){ ?>
                    <a href="gestionController.php">Maintenance du site</a>
                    <?php } ?>
                </div>
                <div class="bt2" >
                    <a href="../model/deconnexion.php" name="logout">Deconnexion</a>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</nav>
</body>
</html>