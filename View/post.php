<?php
/**
 * @author           jonathan brunet
 * @copyright        (c) 2017 Jonathan Brunet <http://www.brunetdev.com>
 * @link             http://www.brunetdev.com
 */
?>
<?php require 'inc/header.php' ?>

<?php if (empty($this->oPost)): ?>
    <p class="error">Cet article n'existe pas!</p>
<?php else: ?>

    <article>
        <time datetime="<?=$this->oPost->createdDate?>" pubdate="pubdate"></time>

        <h1><?=htmlspecialchars($this->oPost->title)?></h1>
        <p><?=nl2br(htmlspecialchars($this->oPost->body))?></p>
        <p class="left small italic">Poster <?=$this->oPost->createdDate?></p>

        <?php
            $oPost = $this->oPost;
            require 'inc/control_buttons.php';
        ?>
    </article>

<?php endif ?>

<?php require 'inc/footer.php' ?>
