<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un client</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../public/css/ajoutClient.css"/>
</head>

<body>

<form method="POST" class="contentconnexion">
    <div class="title_container">
        <h3>Ajouter un client</h3>
    </div class>
    <div class="superform_container">
        <div class="form_container">
            <div class="information">
                <h4>Prenom</h4>
                <input name= "prenom" id="prenom" type="text" pattern="[a-zA-ZÀ-ÿ]+[^0-9]" maxlength="20" minlength="3"  title="Veuillez rentrer un prénom correct" value="<?php if (isset($_POST['prenom'])){ echo $_POST['prenom'];}?>" required  autofocus/>
            </div>

                <div class="information">
                    <h4>Date de naissance</h4>
                    <input name="date" type="date"  value="<?php if (isset($_POST['date'])){ echo $_POST['date'];}?>" required autofocus/>
                </div>
            <div class="information">
                <h4>I-code médecin</h4>
                <input name= "doc" id= "doc" type="text" required pattern="[0-9]+" title="Veuillez rentrer un i-code correct" value="<?php if (isset($_POST['doc'])){ echo $_POST['doc'];}?>" autofocus/>
            </div>

            <div class="information">
                <h4>E-mail</h4>
                <input name= "mail" id= "mail"type="text" pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.[a-zA-Z.]{2,15}" title="Veuillez rentrer un mail correct" value="<?php if (isset($_POST['mail'])){ echo $_POST['mail'];}?>" required autofocus/>
            </div>
        </div>
        <div class="form_container">
            <div class="information">
                <h4>Nom</h4>
                <input name= "nom" id="nom" type="text" required pattern="[a-zA-ZÀ-ÿ]+[^0-9]" title="Veuillez rentrer un nom correct" value="<?php if (isset($_POST['nom'])){ echo $_POST['nom'];}?>" autofocus/>
            </div>


                <div class="information ">
                    <h4>Compagnie aérienne</h4>
                    <input name= "compagnie" id= "compagnie" type="text" pattern="[a-zA-ZÀ-ÿ]+[^0-9]" title="Veuillez rentrer une valeur correcte" value="<?php if (isset($_POST['compagnie'])){ echo $_POST['compagnie'];}?>" required autofocus/>
                </div>
                <div class="information">
                    <h4>Genre </h4>
                    <select name="genre" id="genre" required value="<?php if (isset($_POST['genre'])){ echo $_POST['genre'];}?>">
                        <option value="" selected="selected" disabled="disabled">Genre</option>
                        <option value="Homme">Homme</option>
                        <option value="Femme">Femme</option>
                    </select>
                </div>

            <div class="information">
                <h4> I-C</h4>
                <input name= "icode" id= "icode"type="text" required pattern="[0-9]+" title="Veuillez rentrer un i-code correct" value="<?php if (isset($_POST['icode'])){ echo $_POST['icode'];}?>" autofocus/>
            </div>
        </div>
    </div>
    <div class="erreurM">
        <p><?php if (isset($_GET['ajoutClientError'])){ echo $_GET['ajoutClientError'] ;}?></p>
    </div>
    <div class="changement">
        <div class="bt3">
            <input class="modifier" name="modifier" type="submit" value="Ajouter profil" >
        </div>
        <div class="bt4">
            <input class="annuler" name="annuler" type="reset" value="Annuler" onclick="window.location.href='gestionClientController.php' ">
        </div>
    </div>
    </div>
</form>
</body>
</html>