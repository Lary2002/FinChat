<?php

function user_exist(){

    global $db_connexion;
    $e = array('user' => $_GET['user'], 'session' => $_SESSION['finance']); 
    $sql = "SELECT * FROM users WHERE email = :user AND email != :session";
    $query = $db_connexion->prepare($sql);
    $query->execute($e);
    $exist  = $query->rowCount();

    return $exist;

}


function get_users(){

    global $db_connexion;
	$sql = "SELECT * FROM users WHERE email = '{$_SESSION['user']}'";
	$query = $db_connexion->query($sql);
	$results = array();


    while ($rows = $query->fetchObject()) {
        $results[] = $rows;
    }
    return $results;

}