<?php
/**
 * @author           jonathan brunet
 * @copyright        (c) 2017 Jonathan Brunet <http://www.brunetdev.com>
 * @link             http://www.brunetdev.com
 */
?>
<?php if (!empty($this->sErrMsg)): ?>
    <p class="error"><?=$this->sErrMsg?></p>
<?php endif ?>

<?php if (!empty($this->sSuccMsg)): ?>
    <p class="success"><?=$this->sSuccMsg?></p>
<?php endif ?>
