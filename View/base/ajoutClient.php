<!DOCTYPE html>
<html>
<head>
    <title>Profil</title>

    <meta charset="utf-8" />
    <link rel="stylesheet" href="../View/assets/ajoutClient.css">

</head>
<body>


<form method="POST" class="contentconnexion">
    <div class="title_container">
        <h3>Création d'un nouveau client</h3>
    </div class>
    <div class="superform_container">
        <div class="form_container">
            <div class="information">
                <h4>I-code</h4>
                <input name= "icode" id="icode" type="text" value="ajoutCode" disabled="disabled" autofocus/>
            </div>
                <div class="information">
                    <h4>Nom</h4>
                    <input name="nom" id="nom" type="text" placeholder="nom" autofocus/>
                </div>
                <div class="information">
                    <h4>Médecin</h4>
                    <input name= "medecin" id= "medecin"type="text"   placeholder="médecin" autofocus/>

                </div>

            <div class="information">
                <h4>Compagnie aérienne</h4>
                <input name= "company" id= "company"type="text"  placeholder="Compagnie " autofocus/>
            </div>
        </div>
        <div class="form_container">
            <div class="information">
                <h4>E-mail</h4>
                <input name= "mail" id="mail" type="text" placeholder="E-mail" autofocus/>
            </div>

                <div class="information ">
                    <h4>Prénom</h4>
                    <input name= "prenom" id= "prenom"type="text" placeholder="prenom" autofocus/>
                </div>
                <div class="information">
                    <h4>Genre </h4>
                    <input name= "genre" id= "genre" type="text"  placeholder="genre" autofocus/>
                </div>

            <div class="information">
                <h4>Genre</h4>
                <input name= "genre" id= "genre" type="text"  placeholder="genre"/>
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
