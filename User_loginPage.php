<!DOCTYPE HTML>

<html>
	<head>
		<title>Gifter-Login</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/jquery.scrollgress.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="skel-layers-fixed">
				<h1><a href="index.html">Gifter</a> by RedPanda Development Studio</h1>
				<nav id="nav">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="#" class="button">Editor</a></li>
					</ul>
				</nav>
			</header>

		<!-- Main -->
			<section id="main" class="container 75%">
				<header>
					<h2>Gifts</h2>
				</header>
				<?php
					require("loginPage.php");
					session_start();
					$user=$_SESSION['login_user'];
					$user_id;


					require("connect_db.php");

					$cnc = mysql_query("SELECT * FROM user WHERE name = '$user'");
					$resultNumber = mysql_num_rows($cnc);

					if($resultNumber>0){
						while($row2 = mysql_fetch_array($cnc)) {
							$user_id = $row2['id'];
						}
					}

					$checkgift=mysql_query("SELECT * FROM gift WHERE giftTo = '$user_id'");
					$check_gift=mysql_num_rows($checkgift);

					if($check_gift>0){
						while($row = mysql_fetch_array($checkgift)) {
							echo "<div class='box'>";
							echo "<img class='image featured' src=".$row['gift_data']."/>";
							echo	"<h3>'Regalo'</h3>";
							echo	"<p>Mensaje</p>";
							echo	"</div>";
						}
					}

					
				?>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
					<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
					<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
				</ul>
				<ul class="copyright">
					<li>&copy; RedPanda Development Studio. All rights reserved.</li>
				</ul>
			</footer>

	</body>
</html>