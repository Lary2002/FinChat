<style>
    body {
/* background:#ddd; */
margin-top:10px;
width: auto;
}

.chat-box {
    height: 100%;
    width: 100%;
    background-color: #fff;
    overflow: hidden
}

.chats {
    padding: 30px 15px
}

.chat-avatar {
    float: right
}

.chat-avatar .avatar {
    width: 30px;
        -webkit-box-shadow: 0 2px 2px 0 rgba(0,0,0,0.2),0 6px 10px 0 rgba(0,0,0,0.3);
    box-shadow: 0 2px 2px 0 rgba(0,0,0,0.2),0 6px 10px 0 rgba(0,0,0,0.3);
}

.chat-body {
    display: block;
    margin: 10px 30px 0 0;
    overflow: hidden
}

.chat-body:first-child {
    margin-top: 0
}

.chat-content {
    position: relative;
    display: block;
    float: right;
    padding: 8px 15px;
    margin: 0 20px 10px 0;
    clear: both;
    color: #fff;
    background-color: #62a8ea;
    border-radius: 4px;
        -webkit-box-shadow: 0 1px 4px 0 rgba(0,0,0,0.37);
    box-shadow: 0 1px 4px 0 rgba(0,0,0,0.37);
}

.chat-content:before {
    position: absolute;
    top: 10px;
    right: -10px;
    width: 0;
    height: 0;
    content: '';
    border: 5px solid transparent;
    border-left-color: #62a8ea
}

.chat-content>p:last-child {
    margin-bottom: 0
}

.chat-content+.chat-content:before {
    border-color: transparent
}

.chat-time {
    display: block;
    margin-top: 8px;
    color: rgba(255, 255, 255, .6)
}

.chat-left .chat-avatar {
    float: left
}

.chat-left .chat-body {
    margin-right: 0;
    margin-left: 30px
}

.chat-left .chat-content {
    float: left;
    margin: 0 0 10px 20px;
    color: #76838f;
    background-color: #dfe9ef
}

.chat-left .chat-content:before {
    right: auto;
    left: -10px;
    border-right-color: #dfe9ef;
    border-left-color: transparent
}

.chat-left .chat-content+.chat-content:before {
    border-color: transparent
}

.chat-left .chat-time {
    color: #a3afb7
}

.panel-footer {
    padding: 0 30px 15px;
    background-color: transparent;
    border-top: 1px solid transparent;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
}
.avatar img {
    width: 100%;
    max-width: 100%;
    height: auto;
    border: 0 none;
    border-radius: 1000px;
}
.chat-avatar .avatar {
    width: 30px;
}
.avatar {
    position: relative;
    display: inline-block;
    width: 40px;
    white-space: nowrap;
    border-radius: 1000px;
    vertical-align: bottom;
}

.btn:active{
    transition: 0.1s;
    transform: scale(0.8);
}
.btn{
    height: 60px;
    width: 100px;
    font-family:'Courier New', Courier, monospace;
    font-size: 20px;
}
</style>


<?php

    if (!isset($_GET['user']) || is_logged() == 0 || user_exist() == 0) {
        header('Location: index.php?page=home');
    }

    $_SESSION['user'] = $_GET['user'];

    foreach (get_users() as $user) {
        ?>

<div class="container bootstrap snippets bootdeys d-flex align-item-center">
<div class="col-md-7 col-xs-12 col-md-offset-2">
  <!-- Panel Chat -->
  <div class="panel" id="chat">
    <div class="panel-heading">
      <h3 class="panel-title">
        <i class="icon wb-chat-text" aria-hidden="true"></i> <?= $user->firstname ?> <?= $user->lastname ?> 
      </h3>
    </div>
    <div class="panel-body">
      <div class="chats">
        
      </div>
    </div>
    <div class="panel-footer">
      <form>
        <div class="input-group">
          <textarea type="text" id="message" class="form-control mr-2"> </textarea>
          <span class="input-group-btn">
            <button class="btn btn-primary" id="send" type="button">Send</button>
          </span>
        </div>
      </form>
    </div>
  </div>
  <!-- End Panel Chat -->
</div>
</div>

        <?php
    }

?>

