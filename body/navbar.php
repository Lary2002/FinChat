
<style>
  .sep{
    color: #fff;
  }
  .app-name{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 25px;;
  }

  .navbar{
    border: 1px solid;
    border-radius: 5px;
    border-color: #efefef;
  }

  .navbar .menu a.active{

    background-color:dodgerblue;
    color: #efefef;

  }
</style>


<div class="navbar mb-5 ">
  <a href="index.php" class="app-name">Tchat</a>

  <span class="menu">

    <?php 

      if (is_logged() == 1) {
        
        ?>
          <a href="index.php?page=dashboard" class="<?= ($page == 'dashboard')? 'active' : '' ?>">Dashboard </a><span class="sep"> | </span>
          <a href="index.php?page=friends" class="<?= ($page == 'friends')? 'active' : '' ?>">Friends </a><span class="sep"> | </span>
          <a href="index.php?page=logout">Logout </a><span class="sep">  </span>
        <?php
      }else{

        ?>
          <a class="<?= ($page == 'register')? 'active' : '' ?>" href="index.php?page=register ">Register </a><span class="sep"> | </span>
          <a class="<?= ($page == 'login')? 'active' : '' ?>" href="index.php?page=login ">Login</a>
        <?php
      }

    ?>

    
  </span>
</div>