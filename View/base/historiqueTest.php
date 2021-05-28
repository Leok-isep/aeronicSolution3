<!DOCTYPE html>
<html>
<head>
    <title>Historique Tests</title>
    
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../View/assets/historiqueTest.css" />

</head>
<body>



<div class ="container">
    <div class="info_container">
        <h1>Information du patient <?=$monPilote['firstName']?>  <?=$monPilote['name']?></h1>
    </div>
    <div class="espace_container">
        <div class="tbody_container">

            <table class="tableau_container">
                <thead>
                    <tr>
                    <th>Numéro du test</th>
                    <th>date du test</th>
                    <th>tonalité</th>
                    <th>fréquence cardiaque</th>
                    <th>reflex</th>
                    <th>température corporelle</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $codePilote=$_SESSION['pilote'];
                    $q = $db->query("SELECT * FROM test INNER JOIN clients ON test.icode=clients.icode where clients.icode ='$codePilote' ORDER BY date DESC");
    
                    // Recuperation des resultats
                    while($row = $q ->fetch()){
                        $id=$row[0];
                        $date = date("d-m-Y",strtotime($row[1]));
                        $tone=$row[5];
                        $frequency = $row[3];
                         $reflex = $row[6];
                        $temperature = $row[4];
                        ?><tr>
                            <td><?=$id?></td>
                            <td><?=$date?></td>
                            <td><?=$tone?></td>
                            <td><?=$frequency?></td>
                            <td><?=$reflex?></td>
                            <td><?=$temperature?></td>
                        </tr> <?php
                    }?>
                </tbody>
            </table>
        </div>
    </div>
    <form method="post" class="form_message" >
            <div class="gestionnaireM">
                <select name="code" id="code" required >
                    <option value="" selected="selected" disabled="disabled">N°Test</option>
                    <?php
                 
                    $q = $db->query("SELECT * FROM test INNER JOIN clients ON test.icode=clients.icode where clients.icode ='$codePilote' ORDER BY date DESC");
                    
                    while($row = $q ->fetch()){
                        $id=$row[0];
                    ?>
                    <option value=<?= $id ?>><?=$id?></option>
                    <?php 
                    } ?>
                </select>
                <button type="submit" id="submit" name="submit">Soumettre</button>
            </div>
        </form>

</div>
</body>
</html>
