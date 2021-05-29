<!DOCTYPE html>
<html>
<head>
    <title>Mot de passe</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../public/css/nouveauMdp.css"/>
</head>

<body>
<form method="POST" class="contentconnexion">
    <div class="title_container">
        <h3> Mot De Passe</h3>
    </div class>
    <div class="superform_container">
        <div class="form_container">
            <div class="information">
                <h4>Nouveau mot de passe</h4>
                <input name= "password" id="password" type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Le mot de passe doit contenir au moins un chiffre, une majuscule, une minuscule et être composé d'au moins 8 charactères"/>
            </div>
            <div class="information">
                <h4>Confirmer nouveau mot de passe</h4>
                <input name= "cpassword" id="cpassword" type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Le mot de passe doit contenir au moins un chiffre, une majuscule, une minuscule et être composé d'au moins 8 charactères"/>
            </div>
            <div class="erreurM">
                <p><?php if (isset($_GET['errNewMdpRS'])){ echo $_GET['errNewMdpRS'] ;}?></p>
            </div>
        </div>
    </div>
    <div class= "changement">
        <input class="bt5" name="confirmation" type="submit" value="Confirmer" ></input>
    </div>
</form>
</body>
</html>