<?php

    include_once('./Realisation_backend/modele/utilisateurs.php');
    
    if (isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['age']) && isset($_POST['mail']) && isset($_POST['mdp'])){

        $name_user = $_POST['nom'];
        $firstName_user = $_POST['prenom'];
        $age_user = $_POST['age'];
        $mail_user = $_POST['mail'];
        $mdp_user = $_POST['mdp'];


        $user = new User();

        $user->setName_user($name_user);
        $user->setFirstName_user($firstName_user);
        $user->setAge_user($age_user);
        $user->setMail_user($mail_user);
        $user->setMdp_user($mdp_user);
        var_dump($user);
        $user->createUser();
    }

?>