<?php session_start();
include '../Model/database.php';
include '../View/base/header.php';
include '../View/base/footer.php';
include '../Model/requeteFaq.php';


if (isset($_POST['modifier'])) {

    extract($_POST);
    global $db;
    $requete = $db->prepare("INSERT INTO faq(question,reponse,partie) VALUES (:question,:reponse,:partie)");
    $requete->execute([
        'question' => $question,
        'reponse' => $reponse,
        'partie' => $partie,
    ]);
    header("location: menuFaqController.php");
}
else if (isset($_POST['annuler'])) {
    header("location: menuFaqController.php");
}
include '../View/base/ajoutFaq.php';
?>