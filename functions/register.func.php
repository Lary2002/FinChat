
<?php

function taken_email($email){
	global $db_connexion;
	$e = array('email' => $email);
	$sql = "SELECT email FROM users WHERE email=:email";
	$query = $db_connexion->prepare($sql);
	$query->execute($e);
	$row = $query->rowCount();

	return $row;

}

function register($firstname, $lastname, $email, $password){
	global $db_connexion;
	$e = array('email' => $email,
			'firstname'=>$firstname,
			'lastname'=> $lastname, 
			'password'=> $password);

	$sql = "INSERT INTO users (firstname, lastname, email, password) VALUES (:firstname, :lastname, :email, :password)";
	$query = $db_connexion->prepare($sql);
	$query->execute($e);
	// $row = $query->rowCount();


}