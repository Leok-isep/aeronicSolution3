<!DOCTYPE html>
<html>
<head>
    <title>Mon profil</title>
    <meta charset="utf-8"/>
</head>

<?php
if ($_SESSION['utilisateur']=='client'){  ?>
    <link rel="stylesheet" href="../public/css/profils/profilClient.css"/>
    <?php
}
elseif ($_SESSION['utilisateur']=='administrateur') { ?>
    <link rel="stylesheet" href="../public/css/profils/profilAdmin.css"/>
    <?php
}
else { ?> 
    <link rel="stylesheet" href="../public/css/profils/profilGestionnaire.css"/>
    <?php       
} ?>
<body>
      <form method="POST" class="contentconnexion">
        <div class="title_container">
            <h3>Données personnelles - <?= $_SESSION['utilisateur'];?></h3>
        </div class>
        <div class="superform_container">
            <div class="form_container">
                <div class="information">
                    <h4>Prenom</h4>
                    <p> <?= $user['firstName']?> </p>
                </div>
                <div class="information">
                    <h4>E-mail</h4>
                    <p><?= $user['mail']?></p>
                </div>
                <?php if ($_SESSION['utilisateur']=='gestionnaire')
                {
                    ?> <div class="information">
                    <h4>Centre médical</h4>
                    <p> <?= $user['center']?> </p>
                </div>
               <?php }
               if ($_SESSION['utilisateur']=='client')
               {   ?>
                    <div class="information">
                    <h4>Date de naissance</h4>
                    <p> <?= date("d-m-Y",strtotime($user['birthDate']));?> </p>
                </div> 

                <div class="information">
                    <h4>Médecin</h4>
                    <p> Dr.<?= $user['doctor']?> </p>
                </div>
              <?php  } ?>

            </div>
            <div class="form_container">
                <div class="information">
                    <h4>Nom</h4>
                    <p><?= $user['name']?></p>
                </div>

                <div class="information">
                    <h4> I-C</h4>
                    <p> <?= $user['icode']?> </p>
                </div>

                <?php if ($_SESSION['utilisateur']=='client')
                { ?>
                <div class="information">
                    <h4>Compagnie aérienne</h4>
                    <p> <?= $user['company']?> </p>
                </div>

                <div class="information">
                    <h4>Genre</h4>
                   <p> <?= $user['kind']?> </p>
                </div>
                <?php
                }
                ?>

            </div>
        </div>
        <div class="changement">
            <div class="bt3">
                <input class="change" name="log" type="submit" value="Modifier Mot de Passe" >            
            </div>
            <div class="bt4">
                <input class="change" name="logprofil" type="submit" value="Modifier Profil">
            </div>
        </div>
    </form>
    </div>
</body>
</html>