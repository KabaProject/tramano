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
		<div class="principal__image donate__image"></div>
		<section class="principal__content">
			<nav class="principal__nav">
				<?php include_once('php/partials/layouts/principal-nav.php');?>
				<?php include_once('php/partials/layouts/principal-nav-mobile.php');?>
			</nav>
			<section class="principal__article">
				<article class="principal-article">
					<h1 class="principal-article__title">
						Buscamos mantener un servicio gratuito
					</h1>
					<p class="principal-article__text">
						Las Donaciones son apoyos que nos permitirán ir desarrollando el proyecto para que, eventualmente, pueda ser sustentable de una manera en la que el usuario no requiera pagar ni un centavo.
					</p>
					<p class="principal-article__text--mobile">
						Con tu apoyo podremos mantener este proyecto a flote sin cobrar un centavo a los usuarios.
					</p>
					<div class="principal-article__buttons">
						<button class="button--icon button--primary button--rounded">
							<span class="iconify button--icon__icon" data-icon="simple-icons:paypal" data-inline="false"></span>
							<span class="button--icon__text"> Donar por Paypal </span>
						</button>
						<button class="button--icon button--secondary button--rounded">
							<span class="iconify button--icon__icon" data-icon="grommet-icons:money" data-inline="false"></span>
							<span class="button--icon__text"> Donar en Efectivo </span>
						</button>
					</div>
				</article>
			</section>
			<nav class="principal__socials">
				<?php include_once('php/partials/layouts/principal-socials.php');?>
			</nav>
		</section>

	</header>

	<?php include_once('php/partials/layouts/menu.php'); ?>

	<?php include_once('php/partials/layouts/principal-scripts.php'); ?>
</body>
</html>