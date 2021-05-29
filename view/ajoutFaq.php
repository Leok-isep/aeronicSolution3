<!DOCTYPE html>
<html>
<head>
    <title>Ajouter question</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../public/css/editProfils/modifierProfil.css"/>
</head>

<body>
<form method="POST" class="contentconnexion">
    <div class="title_container">
        <h3>Ajout d'une question-réponse</h3>
    </div class>
    <div class="superform_container">
        <div class="form_containerFaq">
            <div class="information">
                <h4>Question</h4>
                <input name= "question" id="question" type="text" placeholder="question" required autofocus >
            </div>
            <div class="information">
                <h4>Réponse</h4>
                <input name= "reponse" id="reponse" type="text"  placeholder="reponse" required autofocus>
            </div>
            <div class="information2" >
                <h4 >Partie</h4>
                    <select name="partie" id="partie" required>
                        <option value="" selected="selected" disabled="disabled" >-</option>
                        <option value="1">1- Inscription</option>
                        <option value="2">2- Connexion</option>
                        <option value="3">3- Modification - Suppression du profil</option>
                        <option value="4">4- Tests</option>
                    </select>
            </div>
        </div>
    </div>
    <div class="changement">
        <div class="bt3">
            <input class="modifier" name="modifier" type="submit" value="Ajouter question" >
        </div>
        <div class="bt4">
            <input class="annuler" name="annuler" type="reset" value="Annuler" onclick="window.location.href='menuFaqController.php'">
        </div>
    </div>
</form>
</body>
</html>