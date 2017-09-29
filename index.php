<?php
require 'utils.inc.php';
start_page('Formulaire');
$page2 = 'page 2';
$page2adr = 'page2.php';

$pagedata = 'page data';
$pagedataadr = 'data.php';

$pagelog = 'login page';
$pagelogadr = 'login.php';
?>
        <form action="data-processing.php" method="post">
            <p>
                <input type="text" name="id" placeholder="Identifiant"/>
                <input type="radio" name="sex"/>Monsieur
                <input type="radio" name="sex"/>Madame <br/>
                <input type="text" name="mail" placeholder="E-mail"/>
                <input type="password" name="pwd" placeholder="Mot de passe"/>
                <input type="password" name="vpwd" placeholder="Vérification du mot de passe"/> <br/>
                <input type="text" name="tel" placeholder="Numéro de téléphone"/>
                <select name ="pays">
                    <option value="america">Amérique</option>
                    <option value="bulgarie">Bulgarie</option>
                    <option value="croatie">Croatie</option>
                    <option value="denmark">Danemark</option>
                    <option value="espagne">Espagne</option>
                    <option value="france">France</option>
                    <option value="groenland">Groenland</option>
                    <option value="hongrie">Hongrie</option>
                    <option value="israel">Israel</option>
                    <option value="juice">Juice</option>
                    <option value="kazakhstan">Kazakhstan</option>
                    <option value="lituanie">Lituanie</option>
                    <option value="mauritanie">Mauritanie</option>
                    <option value="nepal">Népal</option>
                    <option value="ouzbekistan">Ouzbékistan</option>
                    <option value="pakistan">Pakistan</option>
                    <option value="qatar">Qatar</option>
                    <option value="roumanie">Roumanie</option>
                    <option value="slovenie">Slovenie</option>
                    <option value="togo">Togo</option>
                    <option value="uruguay">Uruguay</option>
                    <option value="venezuela">Venezuela</option>
                    <option value="wallis&futuna">Wallis et Futuna</option>
                    <option value="yemen">Yemen</option>
                    <option value="zimbabwe">Zimbabwe</option>
                </select> <br/>

                <input type="checkbox" name="condgen"/>Conditions générales<br/>
                <input type="submit" name="action" value="mailer"/>

                <input type="submit" name="action" value="rec"/>

                <a href="<?php echo $page2adr; ?>" target="centre"><?php echo $page2; ?></a>
                <a href="<?php echo $pagedataadr; ?>" target="centre"><?php echo $pagedata; ?></a>
                <a href="<?php echo $pagelogadr; ?>" target="centre"><?php echo $pagelog; ?></a>
            </p>

        </form>



<?php
end_page();