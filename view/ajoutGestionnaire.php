<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un gestionnaire</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../public/css/ajoutGestionnaire.css"/>
</head>

<body>

<form method="POST" class="contentconnexion">
    <div class="title_container">
        <h3>Ajouter un gestionnaire</h3>
    </div class>
    <div class="superform_container">
        <div class="form_container">
            <div class="information">
                <h4>Prenom</h4>
                <input name= "prenom" id="prenom" type="text" pattern="[a-zA-ZÀ-ÿ]+[^0-9]" maxlength="20" minlength="3"  title="Veuillez rentrer un prénom correct" value="<?php if (isset($_POST['prenom'])){ echo $_POST['prenom'];}?>" required  autofocus/>
            </div>

            <div class="information">
                <h4>E-mail</h4>
                <input name= "mail" id= "mail"type="text" pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.[a-zA-Z.]{2,15}" title="Veuillez rentrer un mail correct" value="<?php if (isset($_POST['mail'])){ echo $_POST['mail'];}?>" required autofocus/>
            </div>

            <div class="information">
                <h4>Centre médical</h4>
                <input name= "center" id= "center" type="text" required pattern="[a-zA-ZÀ-ÿ]+[^0-9]" title="Veuillez rentrer une valeur correcte" value="<?php if (isset($_POST['center'])){ echo $_POST['center'];}?>" autofocus/>
            </div>
        </div>
        <div class="form_container">
            <div class="information">
                <h4>Nom</h4>
                <input name= "nom" id="nom" type="text" required pattern="[a-zA-ZÀ-ÿ]+[^0-9]" title="Veuillez rentrer un nom correct" value="<?php if (isset($_POST['nom'])){ echo $_POST['nom'];}?>" autofocus/>
            </div>

            <div class="information">
                <h4> I-C</h4>
                <input name= "icode" id= "icode" type="text" required pattern="[0-9]+" title="Veuillez rentrer un i-code correct" value="<?php if (isset($_POST['icode'])){ echo $_POST['icode'];}?>" autofocus/>
            </div>
        </div>
    </div>
    <div class="erreurM">
        <p><?php if (isset($_GET['ajoutGestionnaireError'])){ echo $_GET['ajoutGestionnaireError'] ;}?></p>
    </div>
    <div class="changement">
        <div class="bt3">
            <input class="modifier" name="modifier" type="submit" value="Ajouter profil" >
        </div>
        <div class="bt4">
            <input class="annuler" name="annuler" type="reset" value="Annuler" onclick="window.location.href='gestionGestionnaireController.php' ">
        </div>
    </div>
    </div>
</form>
</body>
</html>