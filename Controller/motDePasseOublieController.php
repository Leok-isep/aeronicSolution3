<?php session_start();
include '../View/base/header.php';
include '../View/base/footer.php';
include '../View/base/motDePasseOublie.php';
include '../Model/database.php';



if (isset($_POST['envoi'])) { 
    extract($_POST);
    $_SESSION['mailoublie'] = $_POST['mail'];
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    $from = "solutionsaeronic@gmail.com";
    $to = $_POST['mail'];
    $subject = "Nouveau mot de passe Aeronic Solutions";
    $message1 = "Vous trouverez dans ce mail, un lien de redirection qui vous permettra de redéfinir votre nouveau mot de passe afin que vous puissiez vous connecter sur le site. 
    Veuillez cliquer sur le lien pour le nouveau mot de passe : ";
    $message2 = "<a href='http://localhost/aeronicsolutions/Controller/nouveauMdpController.php'>Nouveau mot de passe</a>";
    $message = $message1 . $message2;
    $headers = "De :" . $from;
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $envoi = mail($to, $subject, $message, $headers);

    echo $message2;


    global $db;
    $mail = $_SESSION['mailoublie'];
    $result = 0;
    $q = $db->prepare("SELECT * FROM clients WHERE mail =:mail");
    $q->execute(['mail' => $mail]);
    $data = $q->fetch();
    $result += $q->rowCount();

    if ($result == 0) {
        $r = $db->prepare("SELECT * FROM gestionnaires WHERE mail =:mail");
        $r->execute(['mail' => $mail]);
        $data = $r->fetch();
        $result += $r->rowCount();
    }

    if ($result == 0) {
        $s = $db->prepare("SELECT * FROM administrateurs WHERE mail =:mail");
        $s->execute(['mail' => $mail]);
        $data = $s->fetch();
        $result += $s->rowCount();
    }

    if($result != 0) {

        $_SESSION['utilisateur'] = $data['status'];
        echo $_SESSION['utilisateur'];
    }


}




?>
