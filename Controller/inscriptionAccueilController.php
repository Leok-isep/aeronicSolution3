<?php session_start();
include '../View/base/header.php';
include '../View/base/footer.php';

if (isset($_POST['log'])) {
    extract($_POST);

    include '../Model/database.php';
    global $db;
    $code=$_POST['code'];

    $result = 0;


    $q = $db->query("SELECT * FROM icodes where icode='$code'");
    $data = $q->fetch();
    $result += $q->rowCount();
    if($result !=0) {
        $_SESSION['utilisateur']= $data['status'];
        $_SESSION['icode'] = $data['icode'];
        header('Location: inscriptionController.php');
        exit;
    }
    else {



        $_GET['erreurIcode'] = "le code n'existe pas ";

    }
}



include '../View/base/inscriptionAccueil.php';
?>

