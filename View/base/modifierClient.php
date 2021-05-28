<!DOCTYPE html>
<html>
<head>
    <title>Modifier client</title>

    <meta charset="utf-8" />
    <link rel="stylesheet" href="../View/assets/editProfils/modifierProfil.css" />

</head>
<body>

<form method="POST" class="contentconnexion">
    <div class="title_container">
        <h3>Modification du profil client - <?= $client['firstName'], " ",$client['name'] ?></h3>
    </div class>
    <div class="superform_container">
        <div class="form_container">
            <div class="information">
                <h4>Prenom</h4>
                <input name= "prenom" id="prenom" type="text" value="<?= $client['firstName']?>" autofocus/>
            </div>
                <div class="information">
                    <h4>Date de naissance</h4>
                    <input name="date" type="date" value="<?= $client['birthDate']?>" autofocus/>
                </div>
                <div class="information">
                    <h4>Médecin</h4>
                    <input name= "medecin" id= "medecin"type="text"  disabled="disabled" value=<?= $client['doctor']?> autofocus/>

                </div>

            <div class="information">
                <h4>E-mail</h4>
                <input name= "mail" id= "mail"type="text"   value=<?= $client['mail']?> autofocus/>
            </div>
        </div>
        <div class="form_container">
            <div class="information">
                <h4>Nom</h4>
                <input name= "nom" id="nom" type="text" value="<?= $client['name']?>" autofocus/>
            </div>
         <div class="information ">
                    <h4>Compagnie aérienne</h4>
                    <input name= "compagnie" id= "compagnie"type="text" value=<?= $client['company']?> autofocus/>
                </div>
                <div class="information">
                    <h4>Genre </h4>
                    <input name= "genre" id= "genre" type="text"  value=<?= $client['kind'] ?> autofocus/>
                </div>
            <div class="information">
                <h4> I-C</h4>
                <input name= "icode" id= "icode"type="text" disabled="disabled"  value=<?= $client['icode'] ?> autofocus/>
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

