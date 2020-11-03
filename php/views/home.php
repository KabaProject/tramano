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
		<div class="principal__image home__image"></div>
		<section class="principal__content">
			<nav class="principal__nav">
				<?php include_once('php/partials/layouts/principal-nav.php');?>
				<?php include_once('php/partials/layouts/principal-nav-mobile.php');?>
			</nav>
			<section class="principal__article">
				<article class="principal-article">
					<h1 class="principal-article__title">
						Conecta con un trabajo donde puedas crecer
					</h1>
					<p class="principal-article__text">
						En tramano buscamos que puedas desarrollarte como un profesional ofreciendote vacantes previamente revisadas por nuestro equipo. ¿Por que no le hechas un vistazo a lo que hay?
					</p>
					<p class="principal-article__text--mobile">
						En tramano buscamos que puedas desarrollarte como un profesional ofreciendote vacantes revisadas por nuestro equipo.
					</p>
					<div class="principal-article__buttons">
						<a href="" class="button button--primary button--rounded">Comenzar a buscar
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