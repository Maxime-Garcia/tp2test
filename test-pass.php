<?php
$dbLink = mysqli_connect('mysql-maximegarcia.alwaysdata.net','144067_maxime', '31071997')
or die('Erreur de connexion au serveur : '  . mysqli_connect_error());

mysqli_select_db($dbLink,'maximegarcia_php')
or die('Erreur de connexion à la base de données : ' . mysqli_error($dbLink));

$query = 'SELECT ID, MDP FROM USER WHERE ID=' . $_POST['id'] .';';

if(!($result = mysqli_query($dbLink,$query))) {
    echo 'Erreur de requête<br/>';
    //Affiche le type d'erreur
    echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
    //Affiche la requête envoyée
    echo 'Requête : ' . $query . '<br/>';
    exit();
}
if ($dbDonnee = mysqli_fetch_assoc($result)) {
    print_r($_POST);
    print_r($dbDonnee);
    if ($_POST['id'] == $dbDonnee['ID'] && $_POST['pwd'] == $dbDonnee['MDP']) {// Si mon login et password du formulaire == login et password de la base de données alors :{
        session_start();
        $_SESSION['ID'] = 'ok';
        $_SESSION['MDP'] = 'ok';
        header('Location:loggedpage.php');
    } else {
        die('Erreur d\'authentification');
    }
}