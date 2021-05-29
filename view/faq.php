<!DOCTYPE html>
<html>
<head>
    <title>FAQ</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../public/css/faqstyle.css"/>
</head>

<body>  
<div class="contentfaq">
    <div class="title_container">
        <h3>FAQ - foire aux questions</h3>
    </div>
    <div class="faq_container">
        <div class="title_partie">
            <h3>Inscription</h3>
        </div>
        <?php
        $q = $db->query("SELECT * FROM faq  WHERE partie='1'");
        while($row = $q ->fetch()){
            $idFaq=$row[0];
            $question=$row[1];
            $reponse=$row[2];
            ?>
            <div class="questions">
                <button class="bouton" id="buttonr" onclick="changeVisibility(<?=$idFaq?>)"  ><?=$question?></button>
            </div>
            <div class ="reponses" id="<?=$idFaq?>" >
                <h3><?= $reponse?></h3>
            </div>
        <?php } ?>
        <div class="title_partie">
            <h3>Connexion</h3>
        </div>
        <?php
        $q = $db->query("SELECT * FROM faq  WHERE partie='2'");
        while($row = $q ->fetch()){
            $idFaq=$row[0];
            $question=$row[1];
            $reponse=$row[2];
            ?>
            <div class="questions">
                <button class="bouton" id="buttonr" onclick="changeVisibility(<?=$idFaq?>)"  ><?=$question?></button>
            </div>
            <div class ="reponses" id="<?=$idFaq?>" >
                <h3><?= $reponse?></h3>
            </div>
        <?php } ?>
        <div class="title_partie">
            <h3>Modification - Suppression du profil</h3>
        </div>
        <?php
        $q = $db->query("SELECT * FROM faq  WHERE partie='3'");
        while($row = $q ->fetch()){
            $idFaq=$row[0];
            $question=$row[1];
            $reponse=$row[2];
            ?>
            <div class="questions">
                <button class="bouton" id="buttonr" onclick="changeVisibility(<?=$idFaq?>)"  ><?=$question?></button>
            </div>
            <div class ="reponses" id="<?=$idFaq?>" >
                <h3><?= $reponse?></h3>
            </div>
        <?php } ?>

        <div class="title_partie">
            <h3>Tests</h3>
        </div>
        <?php
        $q = $db->query("SELECT * FROM faq  WHERE partie='4'");
        while($row = $q ->fetch()){
            $idFaq=$row[0];
            $question=$row[1];
            $reponse=$row[2];
            ?>
            <div class="questions">
                <button class="bouton" id="buttonr" onclick="changeVisibility(<?=$idFaq?>)"  ><?=$question?></button>
            </div>
            <div class ="reponses" id="<?=$idFaq?>" >
                <h3><?= $reponse?></h3>
            </div>
        <?php } ?>
    </div>
</body>
</html>

<script>
    function changeVisibility(reponse) {
        if(document.getElementById(reponse).style.display !== "block") {
            document.getElementById(reponse).style.display = "block";
        }
        else{
            document.getElementById(reponse).style.display = "none";
        }
    }
</script>