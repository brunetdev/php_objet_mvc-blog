<?php
/**
 * @author           jonathan brunet
 * @copyright        (c) 2017 Jonathan Brunet <http://www.brunetdev.com>
 * @link             http://www.brunetdev.com
 */
?>
<?php if(!empty($_SESSION['is_logged'])): ?>

    <button type="button" onclick="window.location='<?=ROOT_URL?>?p=blog&amp;a=edit&amp;id=<?=$oPost->id?>'" class="bold">Editer</button> |
    <form action="<?=ROOT_URL?>?p=blog&amp;a=delete&amp;id=<?=$oPost->id?>" method="post" class="inline"><button type="submit" name="delete" value="1" class="bold">Supprimer</button></form> |
    <button type="button" onclick="window.location='<?=ROOT_URL?>?p=blog&amp;a=add'" class="bold">Ajouter un nouveau post</button>

<?php endif ?>
