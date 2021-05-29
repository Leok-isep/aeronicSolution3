<!DOCTYPE html>
<html>
<head>
    <title>Gestion FAQ</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../public/css/gestionClient.css"/>
</head>

<body>
    <body>
        <div class="contentGestion">
            <div class="title_container">
                <h3>Gestion - FAQ</h3>
            </div>
            <div class="gestion_container">
                <table class="tableau_container">
                    <thead>
                        <tr>
                            <th>Identifiant Q/R</th>
                            <th>Question</th>
                            <th>Réponse</th>
                            <th>Partie</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        // Creation et envoi de la requete
                        $q = $db->query("SELECT * FROM faq order by idFaq asc");
                        // Recuperation des resultats
                        while ($row = $q->fetch()) {
                            $idFaq = $row[0];
                            $question = $row[1];
                            $reponse = $row[2];
                            $partie = $row[3];
                        ?><tr>
                                <td><?= $idFaq ?></td>
                                <td><?= $question ?></td>
                                <td><?= $reponse ?></td>
                                <td><?= $partie ?></td>
                            </tr> <?php
                                }
                                    ?>
                        </tr>
                    </tbody>
                </table>
                <form method="post" class="form_message">
            </div>
            <div class="ajout_client">
                <a href="ajoutFaqController.php">Ajouter une nouvelle question</a>
            </div>
            <div class="gestionnaireM">
                <select name="gestionFaq" id="gestionFaq" required>
                    <option value="">Que souhaitez-vous faire ?</option>
                    <option value="modifier">Je souhaite modifier des informations</option>
                    <option value="supprimer">Je souhaite supprimer une question</option>
                </select>
                <select name="codeFaq" id="codeFaq" required>
                    <option value="" selected="selected" disabled="disabled">Numero de FAQ</option>
                    <?php
                    $q = $db->query("SELECT * FROM faq order by idFaq asc");
                    while ($row = $q->fetch()) {
                        $idFaq = $row[0];
                    ?>
                        <option value=<?= $idFaq ?>><?= $idFaq ?></option>
                    <?php } ?>
                </select>
                <button type="submit" id="buttonAdd" name="buttonAdd">Soumettre</button>
            </div>
            </form>
        </div>
    </body>
</html>