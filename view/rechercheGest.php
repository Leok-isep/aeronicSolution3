<!DOCTYPE html>
<html>
<head>
    <title>Recherche</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../public/css/rechercheGest.css"/>
</head>

<body>
    <div class ="container">
        <div class="info_container">
            <h1>Liste des clients</h1>
        </div>
        <form class="search_bar_container" method="post" >
                <input class="searchbar" placeholder="Rechercher par nom" type="text" id="search" name="search" aria-label="Search through site content">
            <div class="barre_boutton">
                <input type="submit" value="rechercher" name="bouttonRechercher" id="bouttonRechercher">
            </div>
        </form>

        <div class="tbody_container">

            <table class="tableau_container">
                <thead>
                <tr>
                    <th>I-Code</th>
                    <th>E-mail</th>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>Date de naissance</th>
                    <th>Genre</th>
                    <th>Compagnie aérienne</th>
                    <th>Médecin</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                    if(isset($_POST['search'])){ ?>
                        <?php  
                        $_SESSION['maRecherche'] = $_POST['search'];
                        $nomRecherche=$_SESSION['maRecherche'];
                        $q = $db->query("SELECT * FROM clients WHERE doctor = '$nameDoctor' AND name like '$nomRecherche%' order by name asc");
                    }// Creation et envoi de la requete
                    else{
                        $q = $db->query("SELECT * FROM clients WHERE doctor = '$nameDoctor' order by name asc ");
                    }// Recuperation des resultats
            
                    while($row = $q ->fetch()){
                        $icode=$row[10];
                        $mail=$row[6];
                        $firstName = $row[1];
                        $name = $row[2];
                        $birthDate = date("d-m-Y",strtotime($row[3]));
                        $kind = $row[4];
                        $company = $row[5];
                        $doctor = $row[8];
                    ?><tr>
                        <td><?=$icode?></form></td>
                        <td><?=$mail?></td>
                        <td><?=$firstName?></td>
                        <td><?=$name?></td>
                        <td><?=$birthDate?></td>
                        <td><?=$kind?></td>
                        <td><?=$company?></td>
                        <td><?=$doctor?></td>
                    </tr> <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <form method="post" class="form_message" >
            <div class="gestionnaireM">
                <select name="code" id="code" required >
                    <option value="" selected="selected" disabled="disabled">I-code</option>
                    <?php
                    if(isset($_SESSION['maRecherche'])){ ?>
                        <?php  $nomRecherche=$_SESSION['maRecherche'];
                        echo $_POST['search'];
                        $q = $db->query("SELECT * FROM clients WHERE doctor = '$nameDoctor' AND name like '$nomRecherche%' order by name asc");
                    }// Creation et envoi de la requete
                    else{
                        $q = $db->query("SELECT * FROM clients WHERE doctor = '$nameDoctor' order by name asc ");
                    }
                    while($row = $q ->fetch()){
                        $icode=$row[10];
                    ?>
                    <option value=<?= $icode ?>><?=$icode?></option>
                    <?php 
                    } ?>
                </select>
                <button type="submit" id="submit" name="submit">Soumettre</button>
            </div>
        </form>
    </div>
    <div class="espace">
    </div>
</body>
</html>