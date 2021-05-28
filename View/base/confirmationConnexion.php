<!DOCTYPE html>
<html>

<head>
    <title>Confirmation inscription</title>

    <meta charset="utf-8" />

    <link rel="stylesheet" href="../assets/confirmation.css" />

</head>

<body>

<?php include 'header.php'; ?>
<?php include 'footer.php'; ?>

<?php
include 'includes/database.php';
include 'includes/requeteProfil.php';


?>

<div class="content">
    <div class="title_container">
        <h3>Confirmation inscription</h3>
    </div>
    <div class="form_container">
        <br class="instruction_container1">
            <h3>Vous êtes bien connecté au site</h3></br>
            <h3>Bienvenu <?= $user['firstName']?> <?= $user['name']?> </h3>

        </div>

        <div class= "changement">
            <div class="bt1">
                <a href="index.php">Accueil</a>
            </div>
            <div class="bt2">
                <a href="profil.php">Mon profil</a>
            </div>
        </div>
    </div>

</div>


</body>
</html>