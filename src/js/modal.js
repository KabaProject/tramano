const modal = document.getElementsByClassName('modal')[0];
const menuOpen = document.getElementsByClassName('principal-nav__menu')[0];
const menuClose = document.querySelector('.menu__buttons > .button--danger');

function showModal(modal){
	const modalContainer = modal.getElementsByClassName('modal__container')[0];
	
	modal.style.display = "block";
	modal.style.animation = "show-modal .5s ease forwards";
	modalContainer.style.animation = "fade-in-modal 1s ease .5s forwards";
}

function hideModal(modal){
	const modalContainer = modal.getElementsByClassName('modal__container')[0];
	
	modalContainer.style.animation = "fade-out-modal 1s ease forwards";
	modal.style.animation = "hide-modal .5s ease 1s forwards";
	setTimeout(function(){
		modal.style.display = "none";	
	}, 1500);
}

menuOpen.addEventListener('click', function(){
	showModal(modal);
});

menuClose.addEventListener('click', function(){
	hideModal(modal);
});