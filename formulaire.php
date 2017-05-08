<?php
if (!isset($_POST['pass']) or $_POST['pass'] != 'kangourou')
{
?>
    <html>
    <head>
        <meta charset="utf-8" />
    </head>
    <form method="post" action="formulaire.php">
        <p>
            <label for="pass"> Mot de Passe </label> <input type="password" name="pass" id="pass" required/>
            <input type="submit" value="Se connecter" />
        </p>
    </form>
    </html>
<?php
}
else
{
    echo 'voici le code de la NASA : fire';
}
?>