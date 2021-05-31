<?php session_start();
include 'redirectionSession.php';
include '../model/database.php';
include '../view/header.php';
include '../view/footer.php';
include '../model/requeteClient.php';

if (isset($_POST['modifier'])) {
    extract($_POST);
    global $db;
    $code=$_SESSION['modifclient'];
    $prenom=$_POST['prenom'];
    $nom=$_POST['nom'];
    $date=$_POST['date'];
    $kind=$_POST['genre'];
    $compagnie=$_POST['compagnie'];
    $mail=$_POST['mail'];

    $c = $db->prepare("SELECT mail FROM administrateurs WHERE mail = :mail");
    $c->execute(['mail' => $mail]);
    $resultMail = $c->rowCount();

    $d = $db->prepare("SELECT mail FROM clients WHERE mail = :mail");
    $d->execute(['mail' => $mail]);
    $resultMail += $d->rowCount();

    $e = $db->prepare("SELECT mail FROM gestionnaires WHERE mail = :mail");
    $e->execute(['mail' => $mail]);
    $resultMail += $e->rowCount();

    if ($resultMail == 0) {
        $sql = "UPDATE clients SET firstName = '$prenom', name='$nom', birthDate='$date', kind='$kind',company='$compagnie' ,mail='$mail' WHERE icode = '$code'";
        $reponse = $db->exec($sql);
        header("Location: gestionClientController.php");
    }
    else {
        $_GET['modificationError']="L'email que vous avez entré est déjà utilisé";
    }
}
else if (isset($_POST['annuler'])) {
    header("Location: gestionClientController.php");
}
include '../view/modifierClient.php';
?>
