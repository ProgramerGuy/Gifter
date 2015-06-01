@extends('temp')


@section('content')

<section class="shop_container" ng-controller="userGiftController">
	<article class="shop_item" ng-repeat="item in items">
		<h3 class="shop_itemTittle">@{{item.gift_tittle}}</h3>
		<figure class="shop_imageContainer">
			<img src="@{{item.gift_image}}" alt="item shop" class="shop_itemImage">
		</figure>
		<p class="shop_itemDescription">@{{item.gift_message}}</p>
	</article>
</section>
<footer>
		<section class="newsForm">
			<p class="newsForm_message">Resive noticias de nuevos regalos y actualizaciones</p>
			<form action="" class="newForm_form">
				<input type="text" placeholder="Email" class="newsForm_email">
				<input type="submit" class="newsForm_button">
			</form>
		</section>
		<section class="footer_message_container">
			<p class="footer_message">Crea, Imagina, Comparte. Con gifter puedes
			crear un recuerdo para esa persona especial
			y asi recrear esa experiencia y comunicarle
			el aprecio que se tiene.</p>
			<div class="footer_message_shareContainer">
				<img src="images/icons/youtube.png" alt="" class="footer_message_shareItem">
				<img src="images/icons/twitter.png" alt="" class="footer_message_shareItem">
				<img src="images/icons/facebook.png" alt="" class="footer_message_shareItem">
				<img src="images/icons/flickr.png" alt="" class="footer_message_shareItem">
				<img src="images/icons/pinterest.png" alt="" class="footer_message_shareItem">
			</div>
		</section>
		<section class="rights">
			<p class="rights_text">© RedPanda Development Studio. All rights reserved.</p>
		</section>
	</footer>

@endsection
