<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tramano - Encuentra trabajo para personas sordas</title>
	<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
	<link rel="stylesheet" href="src/css/main.css">
</head>
<body class="principal">
	<header class="principal__header">
		<div class="principal__image publish__image"></div>
		<section class="principal__content">
			<nav class="principal__nav">
				<?php include_once('php/partials/layouts/principal-nav.php');?>
				<?php include_once('php/partials/layouts/principal-nav-mobile.php');?>
			</nav>
			<section class="principal__article">
				<article class="principal-article">
					<h1 class="principal-article__title">
						¿Quieres publicar tu vacante?
					</h1>
					<p class="principal-article__text">
						Nos alegra de que ese sea el caso, pero será necesario una revisión de la vacante para poder, con seguridad, darla a conocer a todo el publico que sigue este proyecto. Envíanos un mensaje para empezar.
					</p>
					<p class="principal-article__text--mobile">
						Nuestro equipo se encarga de confirmar la veracidad de cada una. Ponte en contacto con nosotros para empeza.
					</p>
					<div class="principal-article__buttons">
						<a class="button--icon button--primary button--rounded">
							<span class="iconify button--icon__icon" data-icon="simple-icons:messenger" data-inline="false"></span>
							<span class="button--icon__text">Mandar mensaje</span>
						</a>
					</div>
				</article>
			</section>
			<nav class="principal__socials">
				<?php include_once('php/partials/layouts/principal-socials.php');?>
			</nav>
		</section>

	</header>
</body>
</html>