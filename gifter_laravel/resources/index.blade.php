<!DOCTYPE html>
<html lang="en" ng-app="gifter">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='http://fonts.googleapis.com/css?family=Signika:700,300,400,600' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<title>Gifter</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
	<script type="text/javascript" src="js/angular.min.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
	<link rel="stylesheet" type="text/css" href="css/normal.css">
	<link rel="stylesheet" type="text/css" href="css/shop.css">
	<link rel="stylesheet" type="text/css" href="css/normalizer.css">
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
</head>
<body> 
<nav class="header_menuNav">
<a class="nav-mobile" id="nav-mobile" href="#"></a>
	<ul class="header_menuList">
		<li class="header_menuItem"><a href="galeria.html">Galeria</a></li>
		<li class="header_menuItem"><a href="shop.html">Tienda</a></li>
		<li class="header_menuItem"><a href="About.html">Acerca</a></li>
		<li class="header_menuItem"><a href="home" class="header_menuLogin">Login</a></li>
	</ul>
</nav>
<header class="header_menuContainer">
	<p class="header_tittle ">Gifter</p>
	<p class="header_slogan">Una nueva forma de dar un regalo</p>
	<figure class="header_iconContainer">
		<a href="home.html">
			<img src="images/Logo-Gifter.png" class="header_icon"/>
		</a>
	</figure>
</header>

	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>