<?php session_start();
include '../view/header.php';
include '../view/footer.php';

if (isset($_POST['log'])) {
    extract($_POST);

    include '../model/database.php';
    global $db;
    $code=$_POST['code'];

    $result = 0;

    $q = $db->query("SELECT * FROM icodes where icode='$code'");
    $data = $q->fetch();
    $result += $q->rowCount();

    if($result !=0 && !$data['used']) {
        $_SESSION['utilisateur']= $data['status'];
        $_SESSION['icode'] = $data['icode'];
        header('Location: inscriptionController.php');exit;
    } 
    if ($result ==0) {
        $_GET['erreurIcode'] = "le code n'existe pas";
    }
    if ($data['used']) {
        $_GET['erreurIcode'] = "le code est déjà utilisé";
    }
}
include '../view/inscriptionAccueil.php';
?>