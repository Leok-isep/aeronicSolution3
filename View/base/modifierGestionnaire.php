<!DOCTYPE html>
<html>
<head>
    <title>Modifier gestionnaire</title>

    <meta charset="utf-8" />
    <link rel="stylesheet" href="../View/assets/editProfils/modifierProfil.css" />

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
                <input name= "prenom" id="prenom" type="text" value="<?= $gestionnaire['firstName']?>" autofocus/>
            </div>


            <div class="information">
                <h4>E-mail</h4>
                <input name= "mail" id= "mail"type="text"   value=<?= $gestionnaire['mail']?> autofocus/>
            </div>
            <div class="information">
                <h4> I-C</h4>
                <input name= "icode" id= "icode"type="text" disabled="disabled"  value=<?= $gestionnaire['icode'] ?> autofocus/>
            </div>
        </div>
        <div class="form_container">
            <div class="information">
                <h4>Nom</h4>
                <input name= "nom" id="nom" type="text" value="<?= $gestionnaire['name']?>" autofocus/>
            </div>

            <div class="information">
                <h4>Genre </h4>
                <input name= "centre" id= "centre" type="text"  value=<?= $gestionnaire['center'] ?> autofocus/>
            </div>

        </div>
    </div>
    <div class="changement">
        <div class="bt3">
            <input class="modifier" name="modifier" type="submit" value="Modifier profil" >

        </div>
        <div class="bt4">
            <input class="annuler" name="annuler" type="submit" value="Annuler">
        </div>
    </div>
    </div>
</form>
</body>
</html>

