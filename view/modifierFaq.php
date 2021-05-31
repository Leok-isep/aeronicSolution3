<!DOCTYPE html>
<html>
<head>
    <title>Modifier question</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../public/css/editProfils/modifierProfil.css"/>
</head>

<body>
    <form method="post" class="contentconnexion">
        <div class="title_container">
            <h3>Modification de la question n° <?= $_SESSION['modiffaq'] ?></h3>
        </div class>
        <div class="superform_container">
            <div class="form_containerFaq">
                <div class="information">
                    <h4>Question</h4>
                    <input name="question" id="question" type="text" value="<?= $maQuestion['question'] ?>" required autofocus>
                </div>
                <div class="information">
                    <h4>Réponse</h4>
                    <input name="reponse" id="reponse" type="text" value="<?= $maQuestion['reponse'] ?>" required autofocus>
                </div>
                <div class="information2">
                    <h4>Partie</h4>
                    <input name="partie" id="partie" type="text" value="<?= $maQuestion['partie'] ?>" required pattern="[1-4]" title="1-Inscription, 2-Connexion, 3- Modification - Suppression du profil, 4- Tests" autofocus>
                </div>
            </div>
        </div>
        <div class="changement">
            <div class="bt3">
                <input class="modifier" name="modifier" type="submit" value="Modifier question">
            </div>
            <div class="bt4">
                <input class="annuler" name="annuler" type="reset" value="Annuler" onclick="window.location.href='menuFaqController.php'">
            </div>
        </div>
    </form>
</body>

</html>