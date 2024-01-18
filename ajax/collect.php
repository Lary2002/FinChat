<?php

include '../functions/main-function.php';

$sender = $_SESSION['finance'];
$reciever = $_SESSION['user'];

$sql = "SELECT * FROM messages WHERE (sender = '$sender' AND reciever = '$reciever') OR (reciever = '$sender' AND sender = '$reciever')";
$query = $db_connexion->query($sql);
$results = array();


while ($rows = $query->fetchObject()) {
    $results[] = $rows;
}

foreach ($results as $message) {
    
    ?>

        <div class="<?= ($message->sender == $sender) ? 'chat' : 'chat-left'?>">
          <div class="chat-avatar">
            <a class="avatar avatar-online" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="June Lane">
              <img src="<?= ($message->sender == $sender) ? 'https://bootdey.com/img/Content/avatar/avatar1.png' : 'https://bootdey.com/img/Content/avatar/avatar2.png'?>" alt="...">
              <i></i>
            </a>
          </div>
          <div class="chat-body">
            <div class="chat-content">
              <p>
                <?= $message->content ?>
              </p>
              <time class="chat-time" datetime="2015-07-01T11:37"><?= $message->date ?></time>
            </div>
          </div>
        </div>

    <?php


}







