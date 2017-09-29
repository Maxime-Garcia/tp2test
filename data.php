<?php
require 'utils.inc.php';
start_page('Data');

    $file = 'data.txt';
    fopen($file, 'r');
    if(!($file = fopen($file, 'r')))
    {
        echo 'Erreur de lecture';
        exit();
    }

    echo 'Liste des utilisateurs : <br/>';
    $cpt = 1;
    while($line = fgets($file, 255))
    {
        echo 'Utilisateur n ' . $cpt . ' : ' . $line . '<br/>';
        ++$cpt;
    }
    fclose($file);
?>

    <a href="index.php">Retour vers l'index</a>


<?php
end_page();
