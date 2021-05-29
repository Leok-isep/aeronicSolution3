<?php session_start();
include '../model/database.php';
include '../view/header.php';
include '../view/footer.php';
include '../model/requeteFaq.php';


if (isset($_POST['modifier'])) {
    extract($_POST);
    global $db;
    $requete = $db->prepare("INSERT INTO faq(question,reponse,partie) VALUES (:question,:reponse,:partie)");
    $requete->execute([
        'question' => $question,
        'reponse' => $reponse,
        'partie' => $partie,
    ]);
    header("location: menuFaqController.php");exit;
}
else if (isset($_POST['annuler'])) {
    header("location: menuFaqController.php");exit;
}
include '../view/ajoutFaq.php';
?>