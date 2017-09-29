<?php
require 'utils.inc.php';
start_page('Formulaire');
$page1 = 'page 1';
$page1adr = 'index.php';
?>
    <form action="data-processing.php" method="post">
        <p>
            <?= "TSTGidfhd"?>

            <input type="checkbox" name="condgen"/>Conditions générales<br/>
            <input type="submit" name="action" value="mailer"/>

            <a href="<?php echo $page1adr; ?>" target="centre"><?php echo $page1; ?></a>
        </p>

    </form>



<?php
end_page();