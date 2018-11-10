<?php
/**
 * @author           jonathan brunet
 * @copyright        (c) 2017 Jonathan Brunet <http://www.brunetdev.com>
 * @link             http://www.brunetdev.com
 */
?>
            <footer>
                <p class="italic"><strong><a href="<?=ROOT_URL?>" title="Homeage">page d'acceuil</a></strong> créer par Jonathan Brunet &nbsp; | &nbsp;
                <?php if (!empty($_SESSION['is_logged'])): ?>
                    You are connected as Admin - <a href="<?=ROOT_URL?>?p=admin&amp;a=logout">Déconnexion</a> &nbsp; | &nbsp;
                    <a href="<?=ROOT_URL?>?p=blog&amp;a=all">Voir tout les posts</a>
                <?php else: ?>
                    <a href="<?=ROOT_URL?>?p=admin&amp;a=login">Identification</a>
                <?php endif ?>
                </p>
            </footer>
        </div>
    </body>
</html>
