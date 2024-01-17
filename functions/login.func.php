
<?php

function user_check($email, $password){

    global $db_connexion;
	$e = array('email' => $email, 'password'=>$password);
	$sql = "SELECT email FROM users WHERE email=:email AND password=:password";
	$query = $db_connexion->prepare($sql);
	$query->execute($e);
	$row = $query->rowCount();

	return $row;

}