<?php session_start();
include '../View/base/header.php';
include '../View/base/footer.php';
include '../Model/database.php';

if(isset($_POST['log'])){
        
    extract($_POST);
    
    $result = 0;

    $q = $db->prepare("SELECT * FROM clients WHERE mail =:mail");
    $q->execute(['mail' => $identifiant]);
    $data = $q->fetch();
    $result += $q->rowCount();

    if ($result == 0) {
    $r = $db->prepare("SELECT * FROM gestionnaires WHERE mail =:mail");
    $r->execute(['mail' => $identifiant]);
    $data = $r->fetch();
    $result += $r->rowCount();
    }

    if ($result == 0) {
    $s = $db->prepare("SELECT * FROM administrateurs WHERE mail =:mail");
    $s->execute(['mail' => $identifiant]);
    $data = $s->fetch();
    $result += $s->rowCount();
    }

    if($result != 0) {
        if($data['banish']=='true')
        {
            header("Location:connexionBannissementController.php");
        }
        else{
        $_SESSION['mail'] = $identifiant;
        $_SESSION['utilisateur'] = $data['status'];
        
        if(password_verify($lpassword, $data['password'])){
            header('Location: profilController.php'); 
        }
        else{
            $_GET['connexionError'] = "Identifiants invalides ";
        }
        }

    }
    else
        {
            $_GET['connexionError'] = "Identifiants invalides ";
        }
} 
include '../View/base/connexion.php';
?>