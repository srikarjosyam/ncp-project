<?php
ob_start();
session_start();
include 'connect.php';
?>
<!DOCTYPE HTML>
<html>
	<head>
            <title>WELCOME User</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
                <script>
  function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
  }
</script>
	</head>
	<body>

	<!-- Header -->
		<div id="header">
			<div id="nav-wrapper"> 
				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li><a href="index.php">Home</a></li>
                                               
                                               <li> <a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>Log Out</a></li>
					</ul>
				</nav>
			</div>
			<div class="container"> 
				
				
			</div>
		</div>
	<!-- Header --> 

	<!-- Main -->
		<div id="main">
			<div class="container">
				<div class="row">

					<!-- Sidebar -->
					<div id="sidebar" class="4u">
						<section>
							<header>
								<h2>GAMES</h2>
							</header>
							<div class="row">
								<section class="6u">
									<ul class="default">
										<li><a href="home1.php" id="l2" target="frame1" >CoinTap</a></li>
                                                                                
                                                                               <li><a href="home.php" id="l3" target="frame1">breakout</a></li>
                                                                               <li>last login time was <?php $x=$_SESSION['user']; $res=mysql_query("SELECT email,time FROM timestamp WHERE email='$x'");
   $row=mysql_fetch_array($res);echo $row['time'];
   ?></li>
									</ul>
								</section>
								
							</div>
						</section>
					</div>
					
					<!-- Content -->
					<div id="content" class="8u skel-cell-important">
						<section>
							<header>
                                                            <h2> welcome <?php echo $_SESSION['name'];?></h2>
                                                           
							</header>
                                                    <div id="content" class="container">
                                                        <iframe src="wel2.php" width="100%" height="100%" name="frame1"onload="resizeIframe(this)"style="-webkit-transform:scale(0.5);-moz-transform-scale(0.5);" ></iframe>
                                        </div>
						
					</div>
                                        
                                        

				</div>
                            
			</div>
		</div>
	<!-- /Main -->

	<!-- Tweet -->
		<div id="tweet">
			<div class="container">
				<section>
					<blockquote>&ldquo;You can't have a better tomorrow if you're still thinking about yesterday.&rdquo;</blockquote>
				</section>
			</div>
		</div>
	<!-- /Tweet -->

	<!-- Footer -->
		<div id="footer">
			<div class="container">
				<section>
					<header>
						<h2>Get in touch</h2>
						<span class="byline">CONTACT US AT</span>
					</header>
					<ul class="contact">
						<li><a href="#" class="fa fa-twitter"><span>Twitter</span></a></li>
						<li class="active"><a href="#" class="fa fa-facebook"><span>Facebook</span></a></li>
						<li><a href="#" class="fa fa-dribbble"><span>Pinterest</span></a></li>
						<li><a href="#" class="fa fa-tumblr"><span>Google+</span></a></li>
					</ul>
				</section>
			</div>
		</div>
	<!-- /Footer -->

	<!-- Copyright -->
		


	</body>
</html>

       
<?php ob_end_flush(); ?>