<?php
//require 'index.php';

$action = $_POST['action'];
$email = $_POST['mail'];
$password = $_POST['pwd'];
$verifpwd =$_POST['vpwd'];
$id = $_POST['id'];
$pays = $_POST['pays'];
$sexe = $_POST['sexe'];
$tel = $_POST['tel'];

if ($action == 'mailer') {

    if ($password != $verifpwd && (!is_null($password) || !is_null($verifpwd))) {
        echo '<span style="color:#FF0000; text-align:center;"><strong>Mots de passe différents !</strong>';
    } else if (strlen($password) <= 7) {
        echo '<span style="color:#FF0000; text-align:center;"><strong>Mot de passe trop court !</strong>';
    } else {
        $message = 'Voici vos identifiants d\'inscription :' . PHP_EOL;
        $message .= 'Email :' . $email . PHP_EOL;
        $message .= 'Identifiant :' . $id . PHP_EOL;
        $message .= 'Mot de passe :' . $password . PHP_EOL;
        mail('maxime.gcia13@gmail.com', 'Inscription Formulaire', $message);

        $dbLink = mysqli_connect('mysql-maximegarcia.alwaysdata.net', '144067_maxime', '31071997')
        or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
        mysqli_select_db($dbLink, 'maximegarcia_php')
        or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink)
        );

        $today = date('Y.m.d');

        $query = 'INSERT INTO USER (ID, SEXE, MAIL, MDP, TEL, PAYS, DATE) VALUES (\'' . $id . '\', \'' . $sexe . '\', \'' . $email . '\', \'' . $password . '\', \'' . $tel . '\', \'' . $pays . '\', \'' . $today . '\' )';

        if (!($dbResult = mysqli_query($dbLink, $query))) {
            echo 'Erreur de requête<br/>';
            // Affiche le type d'erreur.
            echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
            // Affiche la requête envoyée.
            echo 'Requête : ' . $query . '<br/>';
        }

        echo 'Mail envoyé.';
    }
} else if ($action == 'rec') {

    $file = 'data.txt';
    fopen($file, 'a');
    if (!($file = fopen($file, 'a'))) {
        echo 'Erreur d\'ouverture';
        exit();
    }
    fputs($file, 'id : ' . $id . ', email : ' . $email . PHP_EOL);
    fclose($file);
} else {
    echo '<br/><strong> Bouton non géré !</strong><br/>';
}
?>
<a href="index.php">Retour vers l'index</a>
