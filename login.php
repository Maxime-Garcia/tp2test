<?php
require 'utils.inc.php';
start_page('Login');

$pagel = 'logged page';
$pageladr = 'loggedpage.php';

$currentpage = 'current page';
$currentpageadr = 'login.php';

$pageindex = 'index page';
$pageindexadr = 'index.php';

?>
<form action="test-pass.php" method="post">
    <p>
        <input type="text" name="id" placeholder="Identifiant"/><br/>
        <input type="password" name="pwd" placeholder="Mot de passe"/><br/>
        <input type="submit" name="connect" value="connect"/><br/>
        <a href="<?php echo $pageindexadr; ?>" target="centre"><?php echo $pageindex; ?></a>
    </p>
</form>