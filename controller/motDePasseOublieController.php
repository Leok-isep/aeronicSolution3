<?php session_start();
include '../view/header.php';
include '../view/footer.php';
include '../model/database.php';

if (isset($_POST['envoi'])) { 
    extract($_POST);
    $_SESSION['mailoublie'] = $_POST['mail'];
    $from = "solutionsaeronic@gmail.com";
    $to = $_POST['mail'];
    $subject = "Nouveau mot de passe Aeronic Solutions";
    $message1 = "Vous trouverez dans ce mail, un lien de redirection qui vous permettra de redéfinir votre nouveau mot de passe afin que vous puissiez vous connecter sur le site. 
    Veuillez cliquer sur le lien pour le nouveau mot de passe : ";
    $message2 = "<a href='http://localhost/aeronicsolutions/controller/nouveauMdpController.php'>Nouveau mot de passe</a>";
    $message = $message1 . $message2;
    $headers = "De :" . $from;
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $envoi = mail($to, $subject, $message, $headers);

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
    }

    else {
        $_GET['erreurMail'] = "Le mail ne correspond à aucun compte";
    }
}
include '../view/motDePasseOublie.php';
?>
