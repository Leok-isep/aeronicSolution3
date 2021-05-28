<!DOCTYPE html>
<html>
<head>
    <title>Bannir client</title>

    <meta charset="utf-8" />
    <link rel="stylesheet" href="../View/assets/supprimerClient.css" />

</head>
<body>

<div class="contentGestion">
    <div class="title_container">
        <h3>Bannir le client</h3>
    </div>
    <div class="gestion_container">
        <p>Confirmez-vous le bannissement du client <?=$client['firstName'],' ',$client['name'],' ?'?> </p>
        <form method="post" class="form_message">
    </div>

    <div class="gestionnaireM">
        <button type="submit" id="oui" name="oui">Confirmer</button>

        <button type="submit" id="non" name="non">Annuler</button></div>
    </form>
</div>

</body>
</html>


