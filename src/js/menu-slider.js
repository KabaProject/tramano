const menuCarrousel = document.querySelector('.menu__carrousel');
const menuSlider = document.querySelector('.menu__slider');
const menuButtonNext = document.querySelector('.menu__toNext');
const menuButtonPrev = document.querySelector('.menu__toPrev');
const menuSlides = document.querySelectorAll('.menu__slide');
const menuSlidesLen = document.querySelectorAll('.menu__slide').length;
const menuButtonToGo = document.querySelector('.menu__buttons > .button--accent');

setButton(menuButtonToGo, 'home');

function moveSliderToNext(slider){
	const position = getSliderPosition(slider) + 100;
	slider.style.transform = `translate(-${position}%, 0px)`;
}

function moveSliderToPrev(slider){
	const position = getSliderPosition(slider) - 100;
	slider.style.transform = `translate(-${position}%, 0px)`;
}

function moveSliderToIndex(slider, index){
	const position = index * 100;
	slider.style.transform = `translate(-${position}%, 0px)`;
}

function getSliderPosition(slider){
	const sliderPosition = slider.style.transform;
	const position = sliderPosition.match(/[0-9]00/) ? sliderPosition.match(/[0-9]00/)[0] : 0; 
	return parseInt(position);
}

function setButton(button, page){
	button.href= `?page=${page}`;
	console.log(button.href);
}

menuButtonNext.addEventListener('click', function(){
	const position = getSliderPosition(menuSlider) / 100;

	if(menuSlidesLen - 1 > position){
		moveSliderToNext(menuSlider);
		setButton(menuButtonToGo, menuSlides[position + 1].dataset.page);
	}else{
		moveSliderToIndex(menuSlider, 0);
		setButton(menuButtonToGo, menuSlides[0].dataset.page);
	}
});

menuButtonPrev.addEventListener('click', function(){
	const position = getSliderPosition(menuSlider) / 100;

	if(getSliderPosition(menuSlider) > 0){
		moveSliderToPrev(menuSlider);
		setButton(menuButtonToGo, menuSlides[position - 1].dataset.page);
	}else{
		moveSliderToIndex(menuSlider, menuSlidesLen - 1);
		setButton(menuButtonToGo, menuSlides[menuSlidesLen - 1].dataset.page);
	}
});