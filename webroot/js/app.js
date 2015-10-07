/**
* Carousel
*/
$('.carousel').owlCarousel({
    items: 3,
    loop: true,
    autoPlay: true,
    navigation: false,
    center: true,
    dots: false,
    dotData: false,
    dotsContainer: false,
    margin: 5
});

(function(){
	var delay,timer, d;

	delay = 1000 * 10;

	timer = setInterval(function(){
		d = new Date();

		if(00 == d.getHours() && 00 == d.getMinutes()){
			console.log("Salut");
			document.location.reload(true);
		}
	}, delay)
})();