<?php session_start();
include '../view/header.php';
include '../view/footer.php';
include '../model/database.php';
include '../view/nouveauMdp.php';

if (isset($_POST['confirmation'])) {
    extract($_POST);
    global $db;
    $mailoubli = $_SESSION['mailoublie'];
    if ($password == $cpassword) {
        $password = $_POST['password'];
        $options = ['cost' => 12,];

        if ($_SESSION['utilisateur']=='client'){
            $r = $db->prepare("UPDATE clients SET password=:password WHERE mail=:mail");
            $r->execute([
                'password' => password_hash("$password", PASSWORD_BCRYPT, $options),
                'mail' =>"$mailoubli"
            ]);
            header('Location: connexionController.php');exit;
        }

        else if ($_SESSION['utilisateur']=='administrateur') {
            $r = $db->prepare("UPDATE administrateurs SET password=:password WHERE mail=:mail");
            $r->execute([
                'password' => password_hash("$password", PASSWORD_BCRYPT, $options),
                'mail' =>"$mailoubli"
            ]);
            header('Location: connexionController.php');exit;
        } 

        else if ($_SESSION['utilisateur']=='gestionnaire') {
            $r = $db->prepare("UPDATE gestionnaires SET password=:password WHERE mail=:mail");
            $r->execute([
                'password' => password_hash("$password", PASSWORD_BCRYPT, $options),
                'mail' =>$mailoubli
            ]);
            header('Location: connexionController.php');exit;
        }
    }
    else {
        header("Location: nouveauMdpController.php?errNewMdpRS=Les mots de passe ne correspondent pas");exit;
    }
}
?>