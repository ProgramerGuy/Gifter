<!DOCTYPE html>
<html lang="en" ng-app="gifter">
<?php
/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylorotwell@gmail.com>
 */

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels nice to relax.
|
*/

require __DIR__.'/../bootstrap/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

$kernel = $app->make('Illuminate\Contracts\Http\Kernel');

$response = $kernel->handle(
	$request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
?>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='http://fonts.googleapis.com/css?family=Signika:700,300,400,600' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	<title>Gifter</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
	<link rel="stylesheet" type="text/css" href="css/normal.css">
	<link rel="stylesheet" type="text/css" href="css/normalizer.css">
</head>
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
		<a href="index.html">
			<img src="images/Logo-Gifter.png" class="header_icon"/>
		</a>
	</figure>
</header>
<body>
<div class="container">
	<section class="steps_container">
		<article class="steps register">
			<img src="images/Register2.png" alt="" class="step_icon">
			<p class="steps_iconTittle">Registrate</p>
			<p class="step_message">
				Llna el formulario registrate, para disfrutar de esta novedosa app
			</p>
		</article>
		<article class="steps">
			<img src="images/Bear_icon.png" alt="" class="step_icon">
			<p class="steps_iconTittle">Crea tu Regalo</p>
			<p class="step_message">
				Comienze a crear y personalizar su
				regalo en nuestro editor
			</p>
		</article>
		<article class="steps">
			<img src="images/Mail_icon2.png" alt="" class="step_icon">
			<p class="steps_iconTittle">Envia y Comparte</p>
			<p class="step_message">
				Envia tu regalo a esa persona especial
				y comparte con la comunidad.
			</p>
		</article>
	</section>
	<section class="popular">
		<figure class="popular_user_imageContainer">
			<img src="images/Katie.jpg" alt="" class="popular_user_image">
			<p class="popular_user_nickname">@Katie_89</p>
		</figure>
		<figure class="popular_imageContainer">
			<img src="images/fox.jpeg" alt="" class="popular_popularImage">
		</figure>
		<article class="popular_container">
			<h2 class="popular_tittle">Fue un gran dia</h2>
			<p class="popular_message">Gracias por haber estado a mi lado todo el tiempo...</p>
		</article>
		<div class="popular_rankingContainer">
			<img src="images/star.svg" alt="" class="popular_rankingImage">
			<p class="popular_rankingVotes">86</p>
		</div>
	</section>
	<section class="video">
		<article class="video_container">
			<video class="video" controls>
	  				<source src="videos/Final_2.mp4" type="video/mp4">
			</video>
		</article>
		<article class="video_shareContainer">
			<p class="video_shareMessage">Prueba esta nueva experiencia y compartelo con tus amigos</p>
			<div class="video_share_iconContainer">
				<img src="" alt="" class="video_share_icon">
				<img src="" alt="" class="video_share_icon">
				<img src="" alt="" class="video_share_icon">
				<img src="" alt="" class="video_share_icon">
				<img src="" alt="" class="video_share_icon">
			</div>
		</article>
	</section>
</div>
	<footer>
		<section class="newsForm">
			<p class="newsForm_message">Resive noticias de nuevos regalos y actualizaciones</p>
			<form action="" class="newForm_form">
				<input type="text" placeholder="Email" class="newsForm_email">
				<input type="submit" class="newsForm_button">
			</form>
		</section>
		<section class="footer_message_container">
			<p class="footer_message">Crea, Imagina, Comparte.Con gifter puedes
			crear un recuerdo para esa persona especial
			y asi recrear esa experiencia y comunicarle
			el aprecio que se tiene.</p>
			<div class="footer_message_shareContainer">
			<a href=""><img src="images/icons/youtube.png" alt="" class="footer_message_shareItem"></a>
			<a href=""><img src="images/icons/twitter.png" alt="" class="footer_message_shareItem"></a>
			<a href=""><img src="images/icons/facebook.png" alt="" class="footer_message_shareItem"></a>	
				<img src="images/icons/flickr.png" alt="" class="footer_message_shareItem">
				<img src="images/icons/pinterest.png" alt="" class="footer_message_shareItem">
			</div>
		</section>
		<section class="rights">
			<p class="rights_text">© RedPanda Development Studio. All rights reserved.</p>
		</section>
	</footer>
</body>
</html>