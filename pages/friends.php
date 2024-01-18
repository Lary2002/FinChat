
<style>

body{
   /* background: #319ac6;*/
   margin-top: 20px;
   margin-bottom:20px; 
}

.ourTeam {
    margin: auto;
    background: #319ac6;
    height:auto;
    margin-bottom: 50px;
    padding-bottom: 30px;
}

.c{
    margin: auto;
}

.ourTeam h2 {
    color: #fff;
    margin: 0 0 30px 0
}

.ourTeam .i {
    margin-top: 30px
}

.ourTeam .i .c {
    background: #fff;
    -webkit-box-shadow: 0 4px 0 #2b86ac;
    -moz-box-shadow: 0 4px 0 #2b86ac;
    box-shadow: 0 4px 0 #2b86ac;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    -moz-background-clip: padding;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    position: relative;
    overflow: hidden;
    padding-bottom: 110px
}

.ourTeam .i .c .wrap {
    position: relative
}

.ourTeam .i .c .wrap img {
    width: 100%;
    -webkit-border-top-left-radius: 5px;
    -webkit-border-top-right-radius: 5px;
    -moz-border-radius-topleft: 5px;
    -moz-border-radius-topright: 5px;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    -webkit-transition: all .3s ease;
    -moz-transition: all .3s ease;
    -ms-transition: all .3s ease;
    -o-transition: all .3s ease
}

.ourTeam .i .c .wrap .info {
    padding: 30px 0;
    position: absolute;
    top: 100%;
    width: 100%;
    -webkit-transition: all .3s ease;
    -moz-transition: all .3s ease;
    -ms-transition: all .3s ease;
    -o-transition: all .3s ease
}

.ourTeam .i .c .wrap .info .name {
    margin: 0;
    font-size: 24px;
    font-size: 2.4rem;
    font-weight: 700;
    margin: 0 0 8px 0
}

.ourTeam .i .c .wrap .info .position {
    margin: 0;
    font-size: 14px;
    font-size: 1.4rem;
    color: #555659
}

.ourTeam .i .c .more {
    position: absolute;
    bottom: -100%;
    width: 100%;
    -webkit-transition: all .3s ease;
    -moz-transition: all .3s ease;
    -ms-transition: all .3s ease;
    -o-transition: all .3s ease
}

.ourTeam .i .c .more p {
    margin: 0 18px 30px 18px;
    line-height: 22px
}

.ourTeam .i .c .more .socials {
    margin: 0 0 20px 0
}

.ourTeam .i .c .more .socials a {
    display: inline-block;
    width: 40px;
    height: 40px;
    line-height: 40px;
    font-size: 22px;
    font-size: 2.2rem;
    color: #fff;
    margin: 0 0 0 3px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    -moz-background-clip: padding;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    text-align: center;
    -webkit-box-shadow: 0 3px 0 rgba(0, 0, 0, .1);
    -moz-box-shadow: 0 3px 0 rgba(0, 0, 0, .1);
    box-shadow: 0 3px 0 rgba(0, 0, 0, .1)
}

.ourTeam .i .c .more .socials a:first-child {
    margin: 0
}

.ourTeam .i .c .more .socials a.facebook {
    background: #3262b9
}

.ourTeam .i .c .more .socials a.facebook:hover {
    background: #2d57a5
}

.ourTeam .i .c .more .socials a.twitter {
    background: #3dd7e5
}

.ourTeam .i .c .more .socials a.twitter:hover {
    background: #27d2e2
}

.ourTeam .i .c .more .socials a.google-plus {
    background: #e23535
}

.ourTeam .i .c .more .socials a.google-plus:hover {
    background: #de2020
}

.ourTeam .i .c .more .socials a.linkedin {
    background: #069
}

.ourTeam .i .c .more .socials a.linkedin:hover {
    background: #005580
}

.ourTeam .i .c:hover img {
    -moz-opacity: 0;
    -khtml-opacity: 0;
    -webkit-opacity: 0;
    opacity: 0
}

.ourTeam .i .c:hover .info {
    top: 0
}

.ourTeam .i .c:hover .more {
    bottom: 0
}
</style>
<div class="container">
<div class="section ourTeam">
	<header class="text-center">
		<h2>Meet <strong>Yours Friends</strong></h2>
	</header>

    
        
               
        <div class="row">
            <?php 
            // var_dump($_SESSION['finance']);
            foreach (get_friends() as $friend) {
                // 
                if ($friend->email != $_SESSION['finance']) {
                    // var_dump($friend);
               

        ?>
        <a href="index.php?page=chat&user=<?= $friend->email ?>" >
            <div class="col-xs-6 col-sm-4 col-md-3 i">
                    
                    <div class="c text-center">
                        <div class="wrap">
                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="#" width="200" height="200" class="img-responsive">
                            <div class="info">
                                <h3 class="name"><?= $friend->firstname ?> <?= $friend->lastname ?></h3>
                                <h4 class="position">Chief Executive Officer</h4>
                            </div>
                    </div>
                    <div class="more">
                        <div class="socials">
                            <a href="#" title="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" title="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" title="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" title="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                        
                </div>
                    
            
            </div>
        </a>
        
    <?php
            }
        }
    
    ?>     
    

	
		
	</div>
</div>
</div>