<?php
/**
 * @author           jonathan brunet
 * @copyright        (c) 2017 Jonathan Brunet <http://www.brunetdev.com>
 * @link             http://www.brunetdev.com
 */
?>
<?php require 'inc/header.php' ?>
<?php require 'inc/msg.php' ?>

<?php if (empty($this->oPost)): ?>
    <p class="error">Cet aricle n'exite pas!</p>
<?php else: ?>

    <form action="" method="post">
        <p><label for="title">Titre:</label><br />
            <input type="text" name="title" id="title" value="<?=htmlspecialchars($this->oPost->title)?>" required="required" />
        </p>

        <p><label for="body">Contenu:</label><br />
            <textarea name="body" id="body" rows="5" cols="35" required="required"><?=htmlspecialchars($this->oPost->body)?></textarea>
        </p>

        <p><input type="submit" name="edit_submit" value="Update" /></p>
    </form>
<?php endif ?>

<?php require 'inc/footer.php' ?>
