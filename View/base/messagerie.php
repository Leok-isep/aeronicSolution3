<!DOCTYPE html>
<html>
<head>
    <title>Nous contacter</title>

    <meta charset="utf-8" />
    <link rel="stylesheet" href="../View/assets/mesagerieStyle.css" />

</head>
<body>


<div class="contentmessage">
    <div class="title_container">
        <h3>Nous contacter</h3>
    </div>
    <div class="message_container">
       <p> Vous souhaitez avoir plus d'informations sur Aeronic Solutions. Envoyez-nous un courriel à l'adresse : solutionsaeronic@gmail.com ou remplissez les champs ci-dessous </p>

    <form method="post" class="form_message">

            <input name="prenom" type="text" id="prenom_message" placeholder="Prénom" value="<?=$user['firstName']?>" required>
            <input name="nom" type="text" id="nom_message" placeholder="Nom" value="<?=$user['name']?>" required>
            <input name="mail" type="mail" id="email" placeholder="Adresse e-mail" value="<?=$user['mail']?>" required>
             <textarea name="contenu" type="text" id="contenu" placeholder="Votre message" required  >
             </textarea>
    </div>
        <div class="envoyer_messageM">
            <input class="envoyer_message" name="envoi" type="submit"></input>
        </div>
   </form>


</div>


</body>
</html>
