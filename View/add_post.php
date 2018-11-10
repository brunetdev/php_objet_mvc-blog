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

    <p><label for="title">Titre:</label><br />
        <input type="text" name="title" id="title" required="required" />
    </p>

    <p><label for="body">Contenu:</label><br />
        <textarea name="body" id="body" rows="5" cols="35" required="required"></textarea>
    </p>

    <p><input type="submit" name="add_submit" value="Add" /></p>
</form>

<?php require 'inc/footer.php' ?>
