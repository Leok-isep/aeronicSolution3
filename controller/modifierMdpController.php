<?php session_start();
include 'redirectionSession.php';
include '../view/header.php';
include '../view/footer.php';
include '../model/database.php';
include '../view/modifierMdp.php';
include '../model/requeteProfil.php';

if (isset($_POST['modifier'])) {
    extract($_POST);
    global $db;
    $mail= $_SESSION['mail'];
    if ($password == $cpassword) {
        $options = ['cost' => 12,];

        if ($_SESSION['utilisateur'] == 'client') {
            $r = $db->prepare("UPDATE clients SET password=:password WHERE mail=:mail");
            $r->execute([
                'password' => password_hash("$password", PASSWORD_BCRYPT, $options),
                'mail' => "$mail"
            ]);
        } 
        else if ($_SESSION['utilisateur'] == 'administrateur') {
            $r = $db->prepare("UPDATE administrateurs SET password=:password WHERE mail=:mail");
            $r->execute([
                'password' => password_hash("$password", PASSWORD_BCRYPT, $options),
                'mail' => "$mail"
            ]);
        } 
        else if ($_SESSION['utilisateur'] == 'gestionnaire') {
            echo "bonjour";
            $r = $db->prepare("UPDATE gestionnaires SET password=:password WHERE mail=:mail");
            $r->execute([
                'password' => password_hash("$password", PASSWORD_BCRYPT, $options),
                'mail' => $mail
            ]);
        }
        header('Location: profilController.php');exit;
    }
    else {
        header("Location: modifierMdpController.php?errModifMdp=Les mots de passe ne correspondent pas");exit;
    }
}
?>