<style>
    body{
    background:#eee;
    margin-top:20px;
}

.panel {
  box-shadow: 0 2px 0 rgba(0,0,0,0.05);
  border-radius: 0;
  border: 0;
  margin-bottom: 24px;
}

.panel-dark.panel-colorful {
  background-color: #3b4146;
  border-color: #3b4146;
  color: #fff;
}

.panel-danger.panel-colorful {
  background-color: #f76c51;
  border-color: #f76c51;
  color: #fff;
}

.panel-primary.panel-colorful {
  background-color: #5fa2dd;
  border-color: #5fa2dd;
  color: #fff;
}

.panel-info.panel-colorful {
  background-color: #4ebcda;
  border-color: #4ebcda;
  color: #fff;
}

.panel-body {
  padding: 25px 20px;
}

.panel hr {
  border-color: rgba(0,0,0,0.1);
}

.mar-btm {
  margin-bottom: 15px;
}

h2, .h2 {
  font-size: 28px;
}

.small, small {
  font-size: 85%;
}

.text-sm {
  font-size: .9em;
}

.text-thin {
  font-weight: 300;
}

.text-semibold {
  font-weight: 600;
}

.card-link{
  text-decoration: none;
}
</style>


<?php
  if (is_logged() == 0) {
    header('Location: index.php?page=login'); 
  }
?>
<div class="container bootstrap snippets bootdey">
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <a href="index.php?page=friends" class="card-link">
              <div class="panel panel-dark panel-colorful">
                  <div class="panel-body text-center">
                    <p class="text-uppercase mar-btm text-sm">Friends</p>
                    <i class="fa fa-users fa-5x"></i>
                    <hr>
                    <p class="h2 text-thin">15</p>
                    <small><span class="text-semibold">7%</span> Higher than yesterday</small>
                  </div>
              </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
        	<div class="panel panel-danger panel-colorful">
        		<div class="panel-body text-center">
        			<p class="text-uppercase mar-btm text-sm">Messages</p>
        			<i class="fa fa-comment fa-5x"></i>
        			<hr>
        			<p class="h2 text-thin">8</p>
        			<small><span class="text-semibold"><i class="fa fa-unlock-alt fa-fw"></i> 10</span> Unread message</small>
        		</div>
        	</div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
        	<div class="panel panel-primary panel-colorful">
        		<div class="panel-body text-center">
        			<p class="text-uppercase mar-btm text-sm">New Order</p>
        			<i class="fa fa-shopping-cart fa-5x"></i>
        			<hr>
        			<p class="h2 text-thin">2,423</p>
        			<small><span class="text-semibold"><i class="fa fa-shopping-cart fa-fw"></i> 954</span> Sales in this month</small>
        		</div>
        	</div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
        	<div class="panel panel-info panel-colorful">
        		<div class="panel-body text-center">
        			<p class="text-uppercase mar-btm text-sm">Balance</p>
        			<i class="fa fa-dollar fa-5x"></i>
        			<hr>
        			<p class="h2 text-thin">200</p>
        			<small><span class="text-semibold"><i class="fa fa-dollar fa-fw"></i> 1100</span> Total Earning</small>
        		</div>
        	</div>
        </div>        
	</div>
</div>