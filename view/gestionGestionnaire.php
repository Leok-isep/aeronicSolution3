<!DOCTYPE html>
<html>
<head>
    <title>Gestion gestionnaire</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../public/css/gestionClient.css"/>
</head>

<body>
<div class="contentGestion">
    <div class="title_container">
        <h3>Gestion - gestionnaires</h3>
    </div>
    <div class="gestion_container">
    <div class="tbody_container">
        <table class="tableau_container">
            <thead>
            <tr>
                <th>I-code</th>
                <th>E-mail</th>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Centre médical</th>
            </tr>
            </thead>
            <tbody>
            <?php

            // Creation et envoi de la requete
            $q = $db->query("SELECT * FROM gestionnaires order by icode asc");
            // Recuperation des resultats
            while($row = $q ->fetch()){
                $icode=$row[7];
                $mail=$row[4];
                $firstName = $row[1];
                $name = $row[2];
                $centre =$row[3];
                ?><tr>
                <td><?=$icode?></td>
                <td><?=$mail?></td>
                <td><?=$firstName?></td>
                <td><?=$name?></td>
                <td><?=$centre?></td>

                </tr> <?php
            }
            ?>
            
            </tbody>
        </table>
        </div>
        <div class="plus_container">
           <a href="ajoutGestionnaireController.php"> <img src="../public/images/pluss.png" alt=""></a>
        </div>
        </div>
        <form method="post" class="form_message">
            <div class="gestionnaireM">
                <select name="gestionGestionnaire" id="gestionGestionnaire" required>
                    <option value="" >Que souhaitez-vous faire ?</option>
                    <option value="modifier">Je souhaite modifier des informations</option>
                    <option value="supprimer">Je souhaite supprimer un gestionnaire</option>
                    <option value="bannir">Je souhaite bannir un gestionnaire</option>
                </select>
                <select name="code" id="code" required >
                    <option value="" selected="selected" disabled="disabled">I-code</option>
                    <?php
                    $q = $db->query("SELECT * FROM gestionnaires order by icode asc");
                    while($row = $q ->fetch()){
                        $icode=$row[7];?>
                        <option value=<?= $icode ?>><?=$icode?></option>
                    <?php } ?>
                </select>
        <button type="submit" id="buttonAdd" name="buttonAdd">Soumettre</button>
    </div>
    </form>
</div>
<div class="espace"></div>

</body>
</html>