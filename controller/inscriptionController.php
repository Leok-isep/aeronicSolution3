<?php session_start();
include '../view/header.php';
include '../view/footer.php';
include '../model/database.php';

    if (isset($_POST['log'])) {

        extract($_POST);


        if ($password == $cpassword) {
        
            global $db;

            $options = ['cost' => 12,];

            $resultMail = 0;
            $resultIc = 0;

            $c = $db->prepare("SELECT mail FROM administrateurs WHERE mail = :mail");
            $c->execute(['mail' => $mail]);
            $resultMail = $c->rowCount();

            $d = $db->prepare("SELECT mail FROM clients WHERE mail = :mail");
            $d->execute(['mail' => $mail]);
            $resultMail += $d->rowCount();

            $e = $db->prepare("SELECT mail FROM gestionnaires WHERE mail = :mail");
            $e->execute(['mail' => $mail]);
            $resultMail += $e->rowCount();

            $f = $db->prepare("UPDATE icodes SET used=:used WHERE icode=:icode");
           
            if ($resultMail == 0) {
                
                if ($_SESSION['utilisateur'] == 'client') {
                    
                    $g = $db->prepare("SELECT * FROM gestionnaires WHERE icode = :icode");
                    $g->execute(['icode' => $icDoctor]);
                    $doctor = $g->fetch();
                    $resultIc += $g->rowCount();

                    if($resultIc == 1) {
                        $q = $db->prepare("INSERT INTO clients(firstName,name,birthDate,kind,company,mail,password,doctor,icode) VALUES (:firstName,:name,:birthDate,:kind,:company,:mail,:password,:doctor,:icode)");
                                        
                        $q->execute([
                            'firstName' => $prenom,
                            'name' => $nom,
                            'birthDate' => $birthDate,
                            'kind' => $genre,
                            'company' => $compagnie,
                            'mail' => $mail,
                            'password' => password_hash("$password", PASSWORD_BCRYPT, $options),
                            'doctor' => $doctor['name'],
                            'icode' => $_SESSION['icode']
                        ]); 
                        $_SESSION['mail'] = $mail; 
                        $f->execute([
                            'used' =>"1",
                            'icode' => $_SESSION['icode']
                            ]);
                        header('Location: confirmationInscriptionController.php');exit;
                    }
                    else {
                        $_GET['inscriptionError']="L'icode que vous avez entré ne correspond à aucun médecin";
                    }     
                }

                if ($_SESSION['utilisateur'] == 'gestionnaire') {
                    $r = $db->prepare("INSERT INTO gestionnaires(firstName,name,center,mail,password,icode) VALUES (:firstName,:name,:center,:mail,:password,:icode)");

                    $r->execute([
                        'firstName' => $prenom,
                        'name' => $nom,
                        'center' => $center,
                        'mail' => $mail,
                        'password' => password_hash("$password", PASSWORD_BCRYPT, $options),
                        'icode' => $_SESSION['icode']
                    ]); 
                    $_SESSION['mail'] = $mail;
                    $f->execute([
                        'used' =>"1",
                        'icode' => $_SESSION['icode']
                        ]);
                    header('Location: confirmationInscriptionController.php');exit;
                }

                if ($_SESSION['utilisateur'] == 'administrateur') {
                    $s = $db->prepare("INSERT INTO administrateurs(firstName,name,mail,password,icode) VALUES (:firstName,:name,:mail,:password,:icode)");

                    $s->execute([
                        'firstName' => $prenom,
                        'name' => $nom,
                        'mail' => $mail,
                        'password' => password_hash("$password", PASSWORD_BCRYPT, $options),
                        'icode' => $_SESSION['icode']
                    ]);
                    $_SESSION['mail'] = $mail;
                    $f->execute([
                        'used' =>"1",
                        'icode' => $_SESSION['icode']
                        ]); 
                    header('Location: confirmationInscriptionController.php');exit;
                }
            } 
            else {
                $_GET['inscriptionError']="L'adresse e-mail existe déjà";
            }
        }
        else {
            $_GET['inscriptionError']="Les mots de passes ne correspondent pas";
        }
    }
    include '../view/inscriptionUtilisateur.php';
?>
