const flkty = new Flickity('.carousel', {
	cellAlign: 'left',
	contain: true,
	autoPlay: true,
});

const currentYr = document.getElementById('currentYear');

const date = new Date();
const year = date.getFullYear();

currentYr.innerText = year;
