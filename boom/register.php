<?php
//si le formulaire a ete soumis
if (isset($_POST['register'])){

    //si tous les champs ont etet remplis
    if (!empty($_POST['name']) && !empty($_POST['pseudo']) && !empty($_POST['email'])
        && !empty($_POST['password']) && !empty($_POST['password_confirm'])){

        $errors = []; //tableau contenat l'ensemble des erreurs

        extract($_POST);


        if(mb_strlen($pseudo) < 3){
            $errors[] = "Pseudo trop court! (Minimun 3 caracteres)";
        }

        if(! filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors[] = "Adresse email invalide!";
        }

        if(mb_strlen($password) < 6){
            $errors[] = "Mot de passe trop court (Minimun 6 caracteres)";
        }else{
            if ($password != $password_confirm){
                $errors [] = "Les deux mots de passe ne concordent pas!";
            }
        }

        if (is_already_in_use('pseudo', $pseudo, 'users')){
            $errors [] ="Pseudo deja utilise! ";
        }

        if (is_already_in_use('email', $email, 'users')){
            $errors [] ="Adresse E-mail deja utilise! ";
        }

        if (count($errors) == 0){
            //Envoi d'un mail d'activation

            //
        }

    }else{
        $errors[] = "Veuillez SVP remplir les champs!";
    }
}
?>



<?php require ('views/register.view.php'); ?>
