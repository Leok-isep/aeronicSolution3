<!DOCTYPE html>
<html>

<head>
    <title>Confirmation inscription</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../public/css/confirmation.css" />
</head>

<body>
<div class="content">
    <div class="title_container">
        <h3>Confirmation inscription</h3>
    </div>
    <div class="form_container">
        <br class="instruction_container1">
            <h3>Votre inscription a bien été enregistrée.</h3></br>
            <h3>Bienvenue <?= $user['firstName']?> <?= $user['name']?>.</h3>
        </div>

        <div class= "changement">
            <div class="bt6">
                <a href="accueilController.php">Accueil</a>
            </div>
            <div class="bt7">
                <a href="profilController.php">Mon profil</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>
