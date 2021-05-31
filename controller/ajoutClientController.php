<?php session_start();
include 'redirectionSession.php';
include '../view/header.php';
include '../view/footer.php';
include '../model/database.php';

if (isset($_POST['modifier'])) {

    extract($_POST);
    global $db;
    $options = ['cost' => 12,];

    $resultMail = 0;  //nb mail existant ok
    $resultCode=0; //nb code existant icode
    $resultIc = 0; // nb medecin ok
    $nbOfIcode = 0; // à faire

    $c = $db->prepare("SELECT mail FROM administrateurs WHERE mail = :mail");
    $c->execute(['mail' => $mail]);
    $resultMail = $c->rowCount();
    $d = $db->prepare("SELECT mail FROM clients WHERE mail = :mail");
    $d->execute(['mail' => $mail]);
    $resultMail += $d->rowCount();
    $e = $db->prepare("SELECT mail FROM gestionnaires WHERE mail = :mail");
    $e->execute(['mail' => $mail]);
    $resultMail += $e->rowCount();


    $f = $db->prepare("SELECT * FROM gestionnaires WHERE icode = :icode");
    $f->execute(['icode' => $doc]);
    $doctor = $f->fetch();
    $resultIc += $f->rowCount();


    $cbis = $db->prepare("SELECT icode FROM administrateurs WHERE icode = :icode");
    $cbis->execute(['icode' => $icode]);
    $resultCode = $cbis->rowCount();
    $dbis = $db->prepare("SELECT icode FROM clients WHERE icode = :icode");
    $dbis->execute(['icode' => $icode]);
    $resultCode = $dbis->rowCount();
    $ebis = $db->prepare("SELECT icode FROM gestionnaires WHERE icode = :icode");
    $ebis->execute(['icode' => $icode]);
    $resultCode = $ebis->rowCount();

    $g = $db->prepare("SELECT icode FROM icodes where icode= :icode");
    $g->execute(['icode' => $icode]);
    $nbOfIcode += $g->rowCount();


    $mot = 'azertyuiopqsdfghjklmwxcvbn123456789';
    $mdp= '';
    for($i=0; $i < 12; $i++)
    {
        $pos = mt_rand(0, 34);
        $lettre = $mot[$pos];
        $mdp= $lettre.$mdp;
    }

    // A SIMPLIFIER
    if ($resultMail == 0) {
        if($resultIc == 1) { // si le medecien existe, gere condition si ic code existe
            if($resultCode == 0){ //si l i code est deja utilisé  ok si =0
                if($nbOfIcode == 0){ // si l icode existe dans la bdd

                    $requetedeux = $db->prepare("INSERT INTO icodes(icode,status,used) VALUES (:icode,:status,:used)");
                    $requetedeux->execute([
                        'icode' => $icode,
                        'status'=> 'client',
                         'used' =>1
                    ]);

                    $requete = $db->prepare("INSERT INTO clients(firstName,name,birthDate,kind,company,mail,password,doctor,icode) VALUES (:firstName,:name,:birthDate,:kind,:company,:mail,:password,:doctor,:icode)");

                    $requete->execute([
                        'firstName' => $prenom,
                        'name' => $nom,
                        'birthDate' => $date,
                        'kind' => $genre,
                        'company' => $compagnie,
                        'mail' => $mail,
                        'password' => password_hash("$mdp", PASSWORD_BCRYPT, $options),
                        'doctor' => $doctor['name'],
                        'icode' => $icode
                    ]);
                    header("location:gestionClientController.php");
                    exit;
                }
                else
                {
                    $_GET['ajoutClientError']="Vous devez générer un nouveau icode - icode déjà existant";
                }
            }
            else {
                $_GET['ajoutClientError']="L'icode que vous avez entré est déjà utilisé";
            }
        }
        else {
            $_GET['ajoutClientError']="L'icode que vous avez entré ne correspond à aucun médecin";
        }
    }
    else {
        $_GET['ajoutClientError']="L'adresse e-mail existe déjà";
    }
}
include '../view/ajoutClient.php';
?>