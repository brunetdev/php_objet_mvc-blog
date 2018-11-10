<?php
/**
 * @author           jonathan brunet
 * @copyright        (c) 2017 Jonathan Brunet <http://www.brunetdev.com>
 * @link             http://www.brunetdev.com
 */
?>
<?php require 'inc/header.php' ?>
<?php require 'inc/msg.php' ?>

<form action="" method="post">

    <p><label for="email">Email:</label><br />
        <input type="email" name="email" id="email" required="required" />
    </p>

    <p><label for="password">mot de passe:</label><br />
        <input type="password" name="password" id="password" required="required" />
    </p>

    <p><input type="submit" value="Log In" /></p>
</form>

<?php require 'inc/footer.php' ?>
