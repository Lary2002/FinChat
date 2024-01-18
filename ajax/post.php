<?php

include '../functions/main-function.php';

$sender = $_SESSION['finance'];
$reciever = $_SESSION['user'];
$message = htmlspecialchars(trim($_POST['message']));

$e = array(
    'sender' => $sender,
    'reciever' =>$reciever,
    'message' =>$message
);

$sql = "INSERT INTO messages( sender, reciever, content, date) VALUES (:sender, :reciever, :message, NOW())";

$query = $db_connexion->prepare($sql);
$query->execute($e);



