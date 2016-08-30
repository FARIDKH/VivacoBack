<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<style>
    
    
        img[alt="aboutImg"]{
            width:600px;
        }
        img[alt="loremImages"]{
            width:700px;
        }
        
        
    </style>
</head>
<body>

<section id="header">
	<div class="container">
		<div class="row">
			<nav class="navbar">
				<div class="navbar-header">
					<div class="navbar-brand">
						<a href="#">Startup<span>ly</span></a>
					</div>
				</div>	
				<ul class="nav navbar-nav">
					<li><a href="#">HOME</a></li>
					<li><a href="#">ABOUT</a></li>
					<li><a href="#">FEATURES</a></li>
					<li><a href="#">PRICES</a></li>
					<li><a href="#">FEEDBACK</a></li>
					<li><a href="#">TEAM</a></li>
					<li><a href="#">CONTACTS</a></li>
					<li class="dropdown extrasDrop" onmouseenter="openMenu()" onmouseleave="closeMenu()">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">EXTRA <i class="fa fa-caret-down" aria-hidden="true"></i></a>
						<ul class="dropdown-menu firstDrop">
							<li class="firstMenu">HOMEPAGES <i class="fa fa-caret-right pull-right" aria-hidden="true"></i>
								<ul class="firstinDrop">
									<li>DEFAULT</li>
									<li>CLICKTHROUGH</li>
									<li>COLORED</li>
									<li>FAST REGISTRATION</li>
									<li>PROMO</li>
									<li>WAITING LIST</li>
									<li>VIDEO BACKGROUND</li>
									<li>YOUTUBE EMBED</li>
									<li>VIMEO EMBED</li>
								</ul>
							</li>
							<li class="secondMenu">BLOG <i class="fa fa-caret-right pull-right" aria-hidden="true"></i>
								<ul class="secondinDrop">
									<li>LIST</li>
									<li>POST</li>
								</ul>
							</li>
							<li class="thirdMenu">ECOMMERCE <i class="fa fa-caret-right pull-right" aria-hidden="true"></i>
								<ul class="thirdinDrop">
									<li>PRODUCT GRID</li>
									<li>PRODUCT LIST</li>
									<li>PRODUCT PAGE</li>
									<li>CART CHECKOUT</li>
									<li>PAYMENT CONFIRMATION</li>
								</ul>	
							</li>
							<li>REGISTRATION</li>
							<li>FORMS</li>
							<li>SHORTCODES</li>
						</ul>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="admin/admin.php">LOGIN</a></li>
					<li><a href="#" class="signUp">SIGN UP</a></li>
				</ul>
			</nav>
		</div><!-- menu ENGDING -->

		<div class="row text-center">
			<h1>Do not wait - <span>launch</span> your startup now!</h1>
			<h3>this tempate is flexible enough to suit any kind of startup or new business</h3>
		</div>
		<div class="row text-center">
			<button class="btn">
				<i class="fa fa-shopping-cart" aria-hidden="true"></i> GET STARTED
			</button>
			<button class="btn">
				TAKE TOUR
			</button>
		</div>
	</div>
</section><!-- header ending -->


<section id="firstSeperator" style="background-color:#F0F0F0">
	<div class="container">
		<div class="row col-md-offset-1 firstSepLogos">
			<figure class="col-md-2 col-sm-12 col-xs-12">
				<img src="assets/images/logo/logo-1.png" alt="logo">
			</figure>
			<figure class="col-md-2 col-sm-12 col-xs-12">
				<img src="assets/images/logo/logo-1.png" alt="logo">
			</figure>
			<figure class="col-md-2 col-sm-12 col-xs-12">
				<img src="assets/images/logo/logo-1.png" alt="logo">
			</figure>
			<figure class="col-md-2 col-sm-12 col-xs-12">
				<img src="assets/images/logo/logo-1.png" alt="logo">
			</figure>
			<figure class="col-md-2 col-sm-12 col-xs-12">
				<img src="assets/images/logo/logo-1.png" alt="logo">
			</figure>
		</div>
	</div>
</section><!-- firstSeperator ending -->


<section id="tabs">
	<div class="container-fluid">
		<div class="container">
			<div class="row text-center">
					<ul class="tabL">
						<li class="active tabbtn1">FIRST TAB</li>
						<li class="tabbtn2">SECOND TAB</li>
						<li class="tabbtn3">THIRD TAB</li>
					</ul>
			</div>
			<div class="row">
				<div id="tab1">
					<div class="col-md-6 left-tab1">
						<?php
                        
                        
                        include "admin/db.php";
                        
                        
                        $sql = "SELECT * FROM about1 ORDER BY id DESC";
                        $query = mysqli_query($db_con,$sql);
                        
                        
                        $row = mysqli_fetch_assoc($query);

                        
                        ?> 
                        
                        
                        <img src="admin/about/img/<?= $row['img'] ?>" alt="aboutImg">
                        
                        <?php
                        
                        
                        ?>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12 right-tab1">
						<h1>FOR EVERY <span>STARTUP</span></h1>
						<p>Lorem ipsum dolor sit atmet sit dolor greand fdanrh sdfs  <br>sit atmet sit dolor greand fdanrh sdfs</p>
						<?php 
                        
    
                        $sql = "SELECT * FROM about1 ORDER BY id DESC";
                        $query = mysqli_query($db_con,$sql);
                        
                        
                        $row = mysqli_fetch_assoc($query);

                    ?>  <p> <?=  $row['info'] ?>   </p><?php
    
                        
                        ?>
						
						<button class="btn">GET TEMPLATE</button>
						<button class="btn">SEE ELEMENTS</button>
					</div>
				</div>
				<div id="tab2">
					<div class="col-md-6 col-sm-12 col-xs-12 left-tab2">
						<h1>NEW AGE <span>TECHNOLOGY</span></h1>
						<h5>Lorem ipsum dolor sit atmet sit dolor greand fdanrh sdfs sit atmet sit dolor greand fdanrh sdfs</h5>
						<p>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.</p>
					</div>
					<div class="col-md-6 right-tab2">
						<?php 
                        $sql = "SELECT * FROM about1 ORDER BY id DESC";
                        $query = mysqli_query($db_con,$sql);
                        $row = mysqli_fetch_assoc($query);

                        ?> 
                        <img src="admin/about/img/<?= $row['img'] ?>" alt="aboutImg"> 
					</div>
				</div>
				<div id="tab3">
					<div class="row text-center">
						<h1>3 EASY STEPS</h1>
						<h5 class="tab3header">Lorem ipsum dolor sit atmet sit dolor greand fdanrh s <br>dfs sit atmet sit dolor greand fdanrh sdfs</h5>
					</div>
					<div class="row tab3main">
						<div class="col-md-4 text-center">
							<i class="lnr lnr-lighter fa-3x"></i>
							<span>PLACE ORDER</span>
							<p>Sit amet, consectetur adipiscing elit.In hac divisione rem ipsam prorsus proboelegantiam desidero.</p>
						</div>
						<div class="col-md-4 text-center">
							<i class="lnr lnr-hourglass fa-3x"></i>
							<span>OUR SYSTEM RUNS</span>
							<p>Sit amet, consectetur adipiscing elit.In hac divisione rem ipsam prorsus proboelegantiam desidero.</p>
						</div>
						<div class="col-md-4 text-center">
							<i class="lnr lnr-diamond fa-3x"></i>
							<span>RECEIVE REPORT</span>
							<p>Sit amet, consectetur adipiscing elit.In hac divisione rem ipsam prorsus proboelegantiam desidero.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><hr><!-- tabs ending -->

<section id="ageTech">
	<div class="container">
		<div class="row">
			<div class="col-md-6 text-left leftTech">
				<h1>NEW AGE <span>TECHNOLOGY</span></h1>
				<p>Lorem ipsum dolor sit atmet sit dolor greand fdanrh sdfs <br>sit atmet sit dolor greand fdanrh sdfs</p>
				<p>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.</p>
			</div>
			<div class="col-md-6 rightTech">
				<img src="assets/images/features/content_image1.png" alt="macBook">
			</div>
		</div>
	</div>
</section><!-- ageTech ending-->

<section id="helmet">
	<div class="container">
		<div class="row">
			<div class="col-md-6 leftHelmet">
				<img src="assets/images/features/helmet.jpg">
			</div>
			<div class="col-md-6 text-right rightHelmet">
				<h1>HANG <span>ON TO</span> YER HELMET</h1>
				<p>Lorem ipsum dolor sit atmet sit dolor greand fdanrh sdfs sitbr	<br> atmet sit dolor greand fdanrh sdfs</p>
				<p>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.</p>
			</div>
		</div>
	</div>
</section><!-- helmet ending -->

<section id="loremAnims" style="background-color:#F0F0F0">
	<div class="container">
		<div class="col-md-3 leftLorem">
			<div class="row dolor1 loremActive">
				<h4>LOREM DOLOR</h4>
				<p>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus </p>
			</div>
			<div class="row dolor2">
				<h4>LOREM DOLOR</h4>
				<p>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus </p>
			</div>
			<div class="row dolor3">
				<h4>LOREM DOLOR</h4>
				<p>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus </p>
			</div>
		</div>
		<div class="col-md-9">
			<div class="row rightLorem">
				<?php
                include "admin/db.php";
                // first Lorem Anim             
                $sql = "SELECT img FROM lorem1";
                $query = mysqli_query($db_con,$sql);
                $row = mysqli_fetch_assoc($query);             
                             
                 // second Lorem Anim
                $sql2 = "SELECT img FROM lorem2";
                $query2 = mysqli_query($db_con,$sql2);
                $row2 = mysqli_fetch_assoc($query2);             
                
                // third Lorem Anim
                $sql3 = "SELECT img FROM lorem3";
                $query3 = mysqli_query($db_con,$sql3);
                $row3 = mysqli_fetch_assoc($query3); 
                 ?> <img src="admin/lorem/uploads/lorem1/<?= $row['img'] ?>" alt="loremImages">
				<img src="admin/lorem/uploads/lorem2/<?= $row2['img'] ?>" alt="loremImages">
				<img src="admin/lorem/uploads/lorem3/<?= $row3['img'] ?>"  alt="loremImages">
			</div>
		</div>
	</div>
</section><!-- loremAnims ending -->


<section id="features">
	<div class="container">
		<div class="row">
			<?php 
            
            include "admin/db.php";
            $sql = "SELECT * FROM features";
            $query = mysqli_query($db_con,$sql);
               
                         
                         
                         
            while($row = mysqli_fetch_assoc($query)){
                ?> 
                   
                <div class="col-md-3 text-center">   
                   
                   <span class="fa fa-<?= $row['class'] ?> fa-3x text-center"></span>
                    <h4 style="text-align:center"><?= $row['header'] ?></h4>
                     <p style="text-align:center"><?= $row['info'] ?></p>
                     
                </div>
                   <?php
            }
            
            ?>
        </div>

	</div>
</section><!-- features ending-->

<section id="secondSeperator">
	<div class="container">
		<div class="col-md-5">
			<h1>GET LIVE UPDATES</h1>
			<h5>No spam promise - only latest news and prices!</h5>
		</div>
		<div class="col-md-7">
			<form>
				<input type="text" placeholder="Your Name">
				<input type="text" placeholder="your@email.com">
				<button type="button" class="btn">SUBSCRIBE</button>
			</form>
		</div>
	</div>	
</section><!-- secondSeperator ending-->

<section id="packages">
	<div class="container">
		<div class="row text-center packHeader">
			<h1>PRODUCT <span>PACKAGES</span></h1>
			<p>Lorem ipsum dolor sit atmet sit dolor greand fdanrh sbr	<br> dfs sit atmet sit dolor greand fdanrh sdfs</p>
		</div>
		<div class="row text-center packMain">
			<div class="col-md-4">
				<div class="row">
					<h1>INDIVIDUAL</h1>
				</div>
				<div class="row">
					<p><b>$</b><span>19 <br> </span>PER MONTH </p>
				</div>
				<div class="row">
					<p><span><b>Free</b></span> Domain</p><hr>
					<p><span><b>Unlimited</b></span> Websites</p><hr>
					<p><span><b>Unlimited</b></span> Bandwidth</p><hr>
					<p><span><b>Unlimited</b></span> Disk Space</p>
				</div>
				<div class="row">
					<button class="btn" disabled>GET STARTED</button>
				</div>
			</div>
			<div class="col-md-4">
				<div class="row">
					<h1>STUDIO</h1>
				</div>
				<div class="row">
					<p><b>$</b><span>29 <br> </span>SUBSCRIPTION</p>
				</div>
				<div class="row">
					<p><span><b>Free</b></span> Domain</p><hr>
					<p><span><b>Unlimited</b></span> Websites</p><hr>
					<p><span><b>Unlimited</b></span> Bandwidth</p><hr>
					<p><span><b>Unlimited</b></span> Disk Space</p>
				</div>
				<div class="row">
					<button class="btn">GET STARTED</button>
				</div>
			</div>
			<div class="col-md-4">
				<div class="row">
					<h1>ENTERPRISE</h1>
				</div>
				<div class="row">
					<p><b>$</b><span>49<br> </span>PER MONTH</p>
				</div>
				<div class="row">
					<p><span><b>Free</b></span> Domain</p><hr>
					<p><span><b>Unlimited</b></span> Websites</p><hr>
					<p><span><b>Unlimited</b></span> Bandwidth</p><hr>
					<p><span><b>Unlimited</b></span> Disk Space</p>
				</div>
				<div class="row">
					<button class="btn">GET STARTED</button>
				</div>
			</div>
		</div>
	</div>
</section><!-- packages ending -->

<section id="awards">
	<div class="container text-center">
		<div class="row col-md-12">
			<h1><span>OUR</span> AWARDS</h1>
			<p>Lorem ipsum dolor sit atmet sit dolor greand fdanrh s dfsbr <br> sit atmet sit dolor greand fdanrh sdfs</p>
		</div>
		<div class="row col-md-12">
			<img src="assets/images/logo/logo-1.png" alt="logo">
			<img src="assets/images/logo/logo-1.png" alt="logo">
			<img src="assets/images/logo/logo-1.png" alt="logo">
			<img src="assets/images/logo/logo-1.png" alt="logo">
		</div>
	</div>
</section><!-- awards ending -->

<section id="thirdSeperator">
	<div class="container">
		<div class="row text-center">
			<h1>WHAT <span>CLIENTS </span>SAY</h1>
		</div>
		<div class="col-md-8 col-md-offset-2 thirdSepSlider">
			<div class="col-md-12 tss-1">
				<div class="col-md-1">
					<i class="fa fa-quote-left" area-hidden="true"></i>
				</div>
				<div class="col-md-10">
					<?php 
                        $sql = "SELECT text FROM clients WHERE id = 1";
                        $query = mysqli_query($db_con,$sql);
                        $row = mysqli_fetch_assoc($query);
                    ?>                 
                    <p><?= $row['text']?> </p>
				</div>
				<div class="col-md-1">
					<i class="fa fa-quote-right" area-hidden="true"></i>
				</div>
			</div>
			<div class="col-md-12 tss-2">
				<div class="col-md-1">
					<i class="fa fa-quote-left" area-hidden="true"></i>
				</div>
				<div class="col-md-10">
					<?php 
                        $sql = "SELECT text FROM clients WHERE id = 2";
                        $query = mysqli_query($db_con,$sql);
                        $row = mysqli_fetch_assoc($query);
                    ?>                 
                    <p><?= $row['text']?> </p>
				</div>
				<div class="col-md-1">
					<i class="fa fa-quote-right" area-hidden="true"></i>
				</div>
			</div>
			<div class="col-md-12 tss-3">
				<div class="col-md-1">
					<i class="fa fa-quote-left" area-hidden="true"></i>
				</div>
				<div class="col-md-10">
					<?php 
                        $sql = "SELECT text FROM clients WHERE id = 3";
                        $query = mysqli_query($db_con,$sql);
                        $row = mysqli_fetch_assoc($query);
                    ?>                 
                    <p><?= $row['text']?> </p>
				</div>
				<div class="col-md-1">
					<i class="fa fa-quote-right" area-hidden="true"></i>
				</div>
			</div>
		</div>
	</div>	

</section><!-- thirdSeperator ending -->


<section id="clients">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-1  col-md-9">
				<div class="col-md-4 client-1">
					<div>
						<img src="assets/images/profiles/profile-1.jpg">	
					</div>
					<div>
						<p>AMY WARNER</p><br>
						<span>Investor at <span>Pear Inc.</span></span>
					</div>
				</div>
				<div class="col-md-4 client-2">
					<div>
						<img src="assets/images/profiles/profile-2.jpg">
					</div>
					<div>
						<p>AMY WARNER</p><br>
						<span>Investor at <span>Pear Inc.</span></span>
					</div>
				</div>
				<div class="col-md-4 client-3">
					<div>
						<img src="assets/images/profiles/profile-1.jpg">
					</div>
					<div>
						<p>AMY WARNER</p><br>
						<span>Investor at <span>Pear Inc.</span></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- clients ending -->



<section id="infoUs">
	<div class="container">
		<div class="col-md-12">
			<div class="row text-center">
				<h1>BEHIND <span>THE</span> SCENES</h1>
				<h5>Lorem ipsum dolor sit atmet sit dolor greand fdanrh s dfs sit atmet sit dolor greand fdanrh sdfs</h5>
			</div>
			<div class="row col-md-offset-2 col-md-8 text-center infoMain">
				<p>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihilampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quaequi non vident, nihilamane umquam magnum ac cognitione. In his rest gestiret. Sed ipsam inchoavit, nihil ampliusuma.Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident,nihilamane umquam magnum ac cognitione.</p>
			</div>
		</div>
	</div>
</section>
<section id="developers">
	<div class="container">
		<div class="row">
			<div class="col-md-3 dev-1">
				<img src="assets/images/profiles/team-1.jpg">
				<div class="overLayout-1">
					<div class="devLayout text-center">
						<p>Mike has worked with CARE USA, for 12 years holding positions such as Deputy Country Director to Director of Programs and Information Systems.</p>
					</div>
					<ul>
						<li class="fa fa-envelope-o" aria-hidden="true"></li>
						<li class="fa fa-twitter" aria-hidden="true"></li>
						<li class="fa fa-facebook"  aria-hidden="true"></li>				
						<li class="fa fa-skype" aria-hidden="true"></li>
						<li class="fa fa-linkedin" aria-hidden="true"></li>
					</ul>
				</div>
				<span>MIKE BOLDER</span>
				<h5>Developer</h5>
			</div>
			<div class="col-md-3 dev-2">
				<img src="assets/images/profiles/team-2.jpg">
				<div class="overLayout-2">
					<div class="devLayout text-center">
						<p>Mike has worked with CARE USA, for 12 years holding positions such as Deputy Country Director to Director of Programs and Information Systems.</p>
					</div>
					<ul>				
						<li class="fa fa-skype" aria-hidden="true"></li>
					</ul>
				</div>
				<span>MIKE BOLDER</span>
				<h5>Developer</h5>
			</div>
			<div class="col-md-3 dev-3">
				<img src="assets/images/profiles/team-3.jpg">
				<div class="overLayout-3">
					<div class="devLayout text-center">
						<p>Ellen has over 13 years of experience in development projects as a senior consultant and project manager in the areas of project management, fund and board development, strategic & financial planning, monitoring & evaluation.</p>
					</div>
					<ul>				
						<li class="fa fa-envelope-o" aria-hidden="true"></li>
						<li class="fa fa-twitter" aria-hidden="true"></li>
					</ul>	
				</div>
				<span>MIKE BOLDER</span>
				<h5>Developer</h5>				
			</div>
			<div class="col-md-3 dev-4">
				<img src="assets/images/profiles/team-4.jpg">
				<div class="overLayout-4">
					<div class="devLayout text-center">
						<p>Mike has worked with CARE USA, for 12 years holding positions such as Deputy Country Director to Director of Programs and Information Systems.</p>
					</div>
					<ul>				
						<li class="fa fa-envelope-o" aria-hidden="true"></li>
						<li class="fa fa-twitter" aria-hidden="true"></li>
						<li class="fa fa-facebook"  aria-hidden="true"></li>				
						<li class="fa fa-skype" aria-hidden="true"></li>
					</ul>	
				</div>
				<span>MIKE BOLDER</span>
				<h5>Developer</h5>
			</div>
		</div>
	</div>
</section><!-- developers ending -->


<section id="lastSeperator">
	<div class="container">
		<div class="row">
			<div class="col-md-1">
				<i class="fa fa-power-off fa-5x"  aria-hidden="true"></i>
			</div>
			<div class="col-md-10">
				<h1>LAUNCH YOUR STARTUP NOW!</h1>
				<h4>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. GET THIS TEMPLATE</h4>
			</div>
			<div class="col-md-1">
				<button class="btn">
					GET THIS TEMPLATE
				</button>
			</div>
		</div>
	</div>
</section><!-- lastSeperator ending -->

<section id="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h2>Startuply</h2>
				<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco. Qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Nisi ut aliquid ex ea commodi consequatur?</p>
				<span><b>John Doeson, Founder.</b></span>
			</div>
			<div class="col-md-5 text-center">
				<h4>SOCIAL NETWORKS</h4>
				<div>
					<i class="fa fa-facebook fa-3x" aria-hidden="true"></i>
					<i class="fa fa-skype fa-3x" aria-hidden="true"></i>
					<i class="fa fa-google fa-3x" aria-hidden="true"></i>				
					<i class="fa fa-pinterest fa-3x" aria-hidden="true"></i><br>
					<i class="fa fa-twitter fa-3x" aria-hidden="true"></i>
					<i class="fa fa-google fa-3x" aria-hidden="true"></i>	
					<i class="fa fa-skype fa-3x" aria-hidden="true"></i>
					<i class="fa fa-facebook fa-3x" aria-hidden="true"></i>
				</div>
			</div>
			<div class="col-md-3">
				<h4>OUR CONTACTS</h4>
				<span> <i class="fa fa-envelope-o" aria-hidden="true"></i> info@startup.ly</span><br>
				<span> <i class="fa fa-map-marker" aria-hidden="true"></i> 2901 Marmora road, Glassgow, Seattle, WA 98122-1090</span><br>
				<span> <i class="fa fa-phone" aria-hidden="true"></i> 1 - 234-456-7980</span>	
			</div>
		</div>
		<div class="row text-center">
			<span>startup.ly 2014. All rights reserved.</span>
		</div>
	</div>
</section>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="assets/js/jquery-3.1.0.min.js"></script>
<script>



	function openMenu(){
		$('.dropdown-toggle')
		.css({
			borderTop:'3px solid #1AC6FF',
			backgroundColor:'#332F26'
		});
		$('.firstDrop')
		.slideDown(300, function() {
			$(this)
			.show()
		});
	}


	function crossMenu(parentMenu,childMenu){
		$(parentMenu).mouseenter(function() {
			$(childMenu).fadeIn('fast');
		});
		$(parentMenu).mouseleave(function() {
			$(childMenu).fadeOut('fast');
		});
	}


	crossMenu('.firstMenu','.firstinDrop')
	crossMenu('.secondMenu','.secondinDrop')
	crossMenu('.thirdMenu','.thirdinDrop')	

	function closeMenu(){
		$('.dropdown-toggle')
		.css({
			borderTop:'none',
			backgroundColor:'transparent'
		})
		$('.firstDrop')
		.slideUp(300, function() {
			$(this)
			.hide()
		})
		
	};








	// console.log	($wWidth)


	$('.client-1').click(function() {
		$('#clients .col-md-4').removeClass('clientActive');
		$(this).addClass('clientActive');
		$('.tss-1')
		.animate({
			position: 'relative',
			left: 0},
			400, function() {
			/* stuff to do after animation is complete */
		});
		$('.tss-2')
		.animate({
			position: 'relative',
			left: '800px'},
			400, function() {
			/* stuff to do after animation is complete */
		});
		$('.tss-3')
		.animate({
			position: 'relative',
			left: '1600px'},
			400, function() {
			/* stuff to do after animation is complete */
		});
	});	

	$('.client-2').click(function() {
		$('#clients .col-md-4').removeClass('clientActive');
		$(this).addClass('clientActive');		
		$('.tss-1')
		.animate({
			position: 'relative',
			left:'-800px'},
			400, function() {
			/* stuff to do after animation is complete */
		});
		$('.tss-2')
		.animate({
			position: 'relative',
			left: '0'},
			400, function() {
			/* stuff to do after animation is complete */
		});
		$('.tss-3')
		.animate({
			position: 'relative',
			left: '800px'},
			400, function() {
			/* stuff to do after animation is complete */
		});
	});	

	$('.client-3').click(function() {
		$('#clients .col-md-4').removeClass('clientActive');
		$(this).addClass('clientActive');		
		$('.tss-1')
		.animate({
			position: 'relative',
			left:'-1600px'},
			400, function() {
			/* stuff to do after animation is complete */
		});
		$('.tss-2')
		.animate({
			position: 'relative',
			left: '-800px'},
			400, function() {
			/* stuff to do after animation is complete */
		});
		$('.tss-3')
		.animate({
			position: 'relative',
			left: '0px'},
			400, function() {
			/* stuff to do after animation is complete */
		});
	});	


	function devLayout(img,layout){
		$(img).mouseenter(function(){
			$(layout).fadeIn('fast')
		})
		$(img).mouseleave(function(){
			$(layout).fadeOut('fast')
		})
	}


	devLayout('.dev-1','.overLayout-1');
	devLayout('.dev-2','.overLayout-2');
	devLayout('.dev-3','.overLayout-3');
	devLayout('.dev-4','.overLayout-4')



	$('.dev-1').mouseenter(function(){
		$('.overLayout-1').fadeIn()
	})
	$('.dev-1').mouseleave(function(){
		$('.overLayout-1').fadeOut()
	})



var x = true , y = true;
$(document).scroll(function() {
	
	var wScroll = $(this).scrollTop();


	if(wScroll > $('#firstSeperator').offset().top - $(window).height() / 0.3){
		$('#firstSeperator figure').each(function(i) {
			setTimeout(function(){
				$('#firstSeperator figure').eq(i).addClass('is-scrolling')
			},200 * (i + 1))
		});
	};


	$('#tabs ul li').click(function() {
		$('#tabs ul li').removeClass('active')
		$(this)	.addClass('active');
	});




	$('.tabbtn1').click(function() {
		$('#tab2 , #tab3')
		.fadeOut('fast')
		$('#tab1')
		.fadeIn('fast')
	});

	$('.tabbtn2').click(function() {
		$('#tab1 , #tab3')
		.fadeOut('fast')
		$('#tab2')
		.fadeIn('fast')
	});


	$('.tabbtn3').click(function() {
		$('#tab2 , #tab1')
		.fadeOut('fast')
		$('#tab3')
		.fadeIn('fast')
	});

	if(y){
		if(wScroll > $('#tabs').offset().top - $(window).height() / 2.5 ){
			$('#tab1').fadeIn('fast')
			y = false;
		}	
	}


	if(wScroll > $('#ageTech').offset().top - $(window).height() / 1.5 ){
		$('.leftTech , .rightTech').addClass('is-techLeft-static')					
	}

	if(wScroll > $('#helmet').offset().top - $(window).height() / 1.5 ){
		$('.leftHelmet , .rightHelmet').addClass('is-hleft-static');
	}


	if (x == true) {
		if(wScroll > $('#loremAnims').offset().top - $(window).height() / 2 ){
				$('.rightLorem img:first').fadeIn('fast')
				$('.rightLorem img:first').css({
				animationPlayState: 'running'});
				x = false;	
		}		
	}

	$('#loremAnims .col-md-3 .row').click(function() {
		$('#loremAnims .col-md-3 .row').removeClass('loremActive')
		$(this).addClass('loremActive')
	});




	$('.dolor1').click(function() {
		$('.rightLorem img:nth-child(2) , .rightLorem img:last').fadeOut('fast')
		$('.rightLorem img:first').fadeIn('fast')
		.css({
			animationPlayState: 'running'
		}); 
	});	
	$('.dolor2').click(function() {
		$('.rightLorem img:first , .rightLorem img:last').fadeOut('fast')
		$('.rightLorem img:nth-child(2)')
		.fadeIn('fast')
		.css({
			animationPlayState: 'running'
		});
	});
	
	$('.dolor3').click(function() {
		$('.rightLorem img:first , .rightLorem img:nth-child(2)').fadeOut('fast')
		$('.rightLorem img:last')
		.fadeIn('fast')
		.css({
			animationPlayState: 'running'
		});
	});

	if(wScroll > $('#features').offset().top - $(window).height() / 1.5){
		$('#features .row').css({
			animationPlayState: 'running'
		});
	}	
	
	if(wScroll > $('#secondSeperator').offset().top - $(window).height() / 1.5){
		$('#secondSeperator .col-md-5 , #secondSeperator .col-md-7').css({
			animationPlayState: 'running'
		});
	}


	if(wScroll > $('#packages').offset().top - $(window).height()){
		$('#packages').css({
			animationPlayState: 'running'
		});
	}

	if(wScroll > $('#awards').offset().top - $(window).height() / 1.5){
		$('#awards').css({
			animationPlayState: 'running'
		});
	}

	if(wScroll > $('#thirdSeperator').offset().top - $(window).height() / 2.5){
		$('.client-2').addClass('clientActive');
		$('#thirdSeperator , #clients').css({
			animationPlayState: 'running'
		});
	}

	if(wScroll > $('#developers').offset().top - $(window).height()){
		$('.dev-1 , .dev-3 , .dev-2 , .dev-4').each(function(i) {
			setTimeout(function(){
				$('.dev-1 , .dev-3 , .dev-2 , .dev-4').eq(i).css({
					animationPlayState: 'running'
				});
			},200 * (i + 1))
		});
	}



})

console.log('....(no error)....')
</script>
</body>
</html>
<script>
$('document').ready(function(){

	


})
</script>