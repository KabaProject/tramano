<?php

if(isset($_GET['page'])){

	$page = $_GET['page'];

	switch ($page) {
		case 'home':
			include_once('php/views/home.php');
			break;
		case 'donate':
			include_once('php/views/donations.php');
			break;
		case 'publish':
			include_once('php/views/publish.php');
			break;

		default:
			echo "<h1>Error 404: Pagina no encontrada</h1>";
			break;
	}

}else{
	include_once("php/views/home.php");
}