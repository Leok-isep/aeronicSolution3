<!DOCTYPE html>
<html>
<head>
    <title>Modifier mot de passe</title>

    <meta charset="utf-8" />
    <link rel="stylesheet" href="../View/assets/modifierMdp.css" />

</head>
<body>

<form method="post" class="contentconnexion">
  <div class="title_container">
    <h3>Modifier Mot De Passe</h3>
  </div class>
    <div class="superform_container">
      <div class="form_container">
        <div class="information">
          <h4>Nouveau mot de passe</h4>
          <input name= "password" type="password"  required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Le mot de passe doit contenir au moins un chiffre, une majuscule, une minuscule et être composé d'au moins 8 charactères"/>
        </div>
        <div class="information">
          <h4>Confirmer nouveau mot de passe</h4>
          <input name= "cpassword" type="password" required  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Le mot de passe doit contenir au moins un chiffre, une majuscule, une minuscule et être composé d'au moins 8 charactères"/>
        </div>
          <div class="information">
          <div class="erreurM">
              <p><?php if (isset( $_GET['errModifMdp'])){ echo $_GET['errModifMdp'];}?></p>
          </div>
          </div>
      </div>
    </div>
    <div class="changement">
        <div class="bt3">
            <input class="modifier" name="modifier" type="submit" value="Confirmer"  >

        </div>
        <div class="bt4">
            <input class="annuler" name="annuler" type="submit" value="Annuler">
        </div>
    </div>


</form>
</body>
</html>