<!DOCTYPE html>
<html>
<head>
    <title>Modifier gestionnaire</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../public/css/editProfils/modifierProfil.css"/>
</head>

<body>
<form method="POST" class="contentconnexion">
    <div class="title_container">
        <h3>Modification du profil client - <?= $gestionnaire['firstName'], " ",$gestionnaire['name'] ?></h3>
    </div class>
    <div class="superform_container">
        <div class="form_container">
            <div class="information">
                <h4>Prenom</h4>
                <input name= "prenom" id="prenom" type="text" value="<?= $gestionnaire['firstName']?>"  required autofocus/>
            </div>

            <div class="information">
                <h4>E-mail</h4>
                <input name= "mail" id= "mail"type="text"   value=<?= $gestionnaire['mail']?> required pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.[a-zA-Z.]{2,15}" title="Veuillez rentrer un mail correct" autofocus/>
            </div>
            <div class="information">
                <h4> I-C</h4>
                <input name= "icode" id= "icode"type="text" disabled="disabled"  value=<?= $gestionnaire['icode']  ?> autofocus/>
            </div>
        </div>
        <div class="form_container">
            <div class="information">
                <h4>Nom</h4>
                <input name= "nom" id="nom" type="text" required value=<?= $gestionnaire['name']?> autofocus/>
            </div>

            <div class="information">
                <h4>Genre </h4>
                <input name= "centre" id= "centre" type="text" required value=<?= $gestionnaire['center']  ?> autofocus/>
            </div>

        </div>
    </div>
    <div class="changement">
        <div class="bt3">
            <input class="modifier" name="modifier" type="submit" value="Modifier profil" >

        </div>
        <div class="bt4">
            <input class="annuler" name="annuler" type="reset" value="Annuler" onclick="window.location.href='gestionGestionnaireController.php'">
        </div>
    </div>
    </div>
</form>
</body>
</html>