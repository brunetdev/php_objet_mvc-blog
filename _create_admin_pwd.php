<?php
/**
 * @author           jonathan brunet
 * @copyright        (c) 2017 Jonathan Brunet <http://www.brunetdev.com>
 * @link             http://www.brunetdev.com
 */

/** Allows to create an admin password easily **/
/* I use PHP 5.5 password hashing for this app test. Thanks this new PHP feature, the password gets a salt and it is much more secure than a simple SHA1 algorithm */

$sPwd = 'pwd123'; // Admin Password
$sHashedPwd = password_hash($sPwd , PASSWORD_BCRYPT, array('cost' => 14));
echo 'Password is: ' . $sHashedPwd;
