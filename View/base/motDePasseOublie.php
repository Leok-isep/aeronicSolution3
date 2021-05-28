<!DOCTYPE html>
<html>

<head>
    <title>Mot de passe oublié</title>

    <meta charset="utf-8" />

    <link rel="stylesheet" href="../View/assets/mdpoubli.css" />

</head>

<body>


<form method="post" class="contentconnexion">
        <div class="title_container">
            <h3>Oubli mot de passe</h3>
        </div>
        <div class="form_container">
            <p>Nous vous invitons à saisir et envoyer votre e-mail dans le champ prévu à cet effet.<br>Nous vous enverrons par mail un lien afin que vous puissiez changer votre mot de passe en toute sécurité.</p>
            <input type="text" name="mail" id="mail" placeholder="Adresse mail" required pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.[a-zA-Z.]{2,15}" title="Veuillez rentrer un mail correct">

        </div>
         <div class="logC">
              <input class="log" name="envoi" type="submit" value="Envoyer">
         </div>
</form>
</body>
</html>


