@extends('index')

@section('content')
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
@endsection

