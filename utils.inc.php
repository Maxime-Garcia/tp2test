<?php
function start_page($title)
{
?><!DOCTYPE html>
<html lang="fr">
    <head>
        <title><?= $title ?></title>
    </head>
    <body>
        <strong><?= $title ?></strong></br><?php
};

function end_page()
{
//?><!--        <hr/><br/><strong>Fin de la page</strong></br></hr>-->
    </body>
</html><?php
};
