<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
    </head>
    <body>
    <?php
        if (isset($_POST['pass']) and $_POST['pass'] == 'kangourou')
    {
        echo 'voici le code de la NASA : fire';
    }
    else
    {
        echo 'désolé mauvais mot de passe je ne peux pas vous donner les codes de la NASA';
    }
    ?>
    </body>
</html>