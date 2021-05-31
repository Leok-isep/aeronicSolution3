<?php session_start();
include '../model/database.php';
include '../view/header.php';
include '../view/footer.php';
include '../model/requeteGestionnaire.php';

if (isset($_POST['modifier'])) {

    extract($_POST);
    global $db;
    $code=$_SESSION['modifGestionnaire'];
    $prenom=$_POST['prenom'];
    $nom=$_POST['nom'];
    $centre=$_POST['centre'];
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
        $sql = "UPDATE gestionnaires SET firstName = '$prenom', name='$nom', center='$centre' ,mail='$mail' WHERE icode = '$code'";
        $reponse = $db->exec($sql);
        header("Location: gestionGestionnaireController.php");
    }
    else {
        $_GET['modificationError']="L'email que vous avez entré est déjà utilisé";
    }
}
else if (isset($_POST['annuler'])) {
    header("Location: gestionGestionnaireController.php");
}
include '../view/modifierGestionnaire.php';
?>
