<?php

function get_friends(){

    global $db_connexion;
	$sql = "SELECT * FROM users";
	$query = $db_connexion->query($sql);
	$results = array();


    while ($rows = $query->fetchObject()) {
        $results[] = $rows;
    }
    return $results;

}