<!DOCTYPE html>
<html>
<head>
    <title>modifier profil</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../public/css/editProfils/modifierProfil.css"/>
</head>

<body>
<?php
if ($_SESSION['utilisateur']=='client'){  ?>
    <link rel="stylesheet" href="../public/css/editProfils/modifierProfil.css"/> <?php
}
elseif ($_SESSION['utilisateur']=='administrateur'){ ?>
    <link rel="stylesheet" href="../public/css/editProfils/modifierProfilAdmin.css" />
    <?php
}
else{ ?>
    <link rel="stylesheet" href="../public/css/editProfils/modifierProfilGestionnaire.css"/>
    <?php
}
?>
<form method="POST" class="contentconnexion">
    <div class="title_container">
        <h3>Modification du profil - <?php echo $_SESSION['utilisateur']?></h3>
    </div class>
    <div class="superform_container">
        <div class="form_container">
            <div class="information">
                <h4>Prenom</h4>
                <input name= "prenom" id="prenom" type="text" value="<?= $user['firstName']?>" required autofocus/>
            </div>
            <?php if ($_SESSION['utilisateur']=='client'){  ?>
                <div class="information">
                    <h4>Date de naissance</h4>
                    <input name="date" type="date" value="<?= $user['birthDate']?>" required autofocus/>
                </div>
                <div class="information">
                    <h4>Médecin</h4>
                    <input name= "medecin" id= "medecin"type="text"  disabled="disabled" value= Dr.<?= $user['doctor']?> autofocus/>
                </div>
            <?php } ?>
            <?php if ($_SESSION['utilisateur']=='gestionnaire') { ?>
                <div class="information">
                    <h4>Cabinet</h4>
                    <input name= "cabinet" id= "cabinet" type="text" value= <?= $user['center']?> required autofocus/>
                </div>
            <?php } ?>
            <div class="information">
                <h4>E-mail</h4>
                <input name= "mail" id= "mail"type="text"  disabled="disabled" value=<?= $user['mail']?> required autofocus/>
            </div>
        </div>
        <div class="form_container">
            <div class="information">
                <h4>Nom</h4>
                <input name= "nom" id="nom" type="text" value="<?= $user['name']?>" required autofocus/>
            </div>

            <?php if ($_SESSION['utilisateur']=='client'){  ?>
                <div class="information <?php echo $user['kind']; ?>">
                    <h4>Compagnie aérienne</h4>
                    <input name= "compagnie" id= "compagnie"type="text" value=<?= $user['company']?> required autofocus/>
                </div>
                <div class="information">
                    <h4>Genre </h4>
                    <input name= "genre" id= "genre"type="text"  disabled="disabled" value=<?= $user['kind'] ?>  autofocus/>
                </div>

            <?php } ?>
            <div class="information">
                <h4> I-C</h4>
                <input name= "icode" id= "icode"type="text"  disabled="disabled" value=<?= $user['icode'] ?>  autofocus/>
            </div>
        </div>
    </div>
    <div class="changement">
        <div class="bt3">
            <input class="modifier" name="modifier" type="submit" value="Modifier profil" >

        </div>
        <div class="bt4">
            <input class="annuler" name="annuler" type="reset" value="Annuler" onclick="window.location.href='profilController.php' ">
        </div>
    </div>
    </div>
</form>
</body>
</html>