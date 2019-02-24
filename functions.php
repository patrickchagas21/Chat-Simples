<?php 

use \Pcode\Model\User;

function getUserName()
{

	$user = User::getFromSession();

	return $user->getuser_name();

}

?>