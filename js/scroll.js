// scroll down button
// http://codepen.io/nxworld/pen/OyRrGy

$(function() {
	$('a[href*=#]').on('click', function(e) {
		e.preventDefault();
		$('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
	});
});

// end scroll down button



$(document).ready(function() {

	// -------------------- For resizable description -------------------- \\
	$('.scroll-gallery_text').resizable({
		handles: 'e, s',
		minWidth: 200
	});


	// -------------------- For Description Toggles -------------------- \\

	$('.art-description').hide();

	// jQuery Horizontal Slide Toggle: http://jsfiddle.net/7ZBQa/
	// FUTURE: For different directions: http://fiddle.jshell.net/KFmLv/5750/ (use for other web browser sizes?)
	$('.toggle-description').click(function(){

		// get toggle-description ID to show same art-description ID
		var id = this.id.slice(0, -1); // remove last string digit
		$('.art-description#'+id).animate({width: 'toggle'});

		// *SOMEHOW* get width of art and description
		//var art_width = this.width;
		var art_width = 10;
		//var des_width = $('.art-description#'+id).width;
		var des_width = -300;


		// or maybe test to see what position the toggle-description and art-description are,
		// and direct to that position when clicked
		// if description isn't open yet:
		$('.scroll-gallery_art').animate( {scrollLeft: '+='+art_width }, 1000);

		// if description is open:
		// $('.scroll-gallery_art').animate( {scrollLeft: '+='-des_width }, 1000);

	});


	// -------------------- For Scrolling Buttons --------------------- \\


	// does this do anything? may not need
	$(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
                $('.scrolldn').fadeIn();
            } else {
                $('.scrollup').fadeOut();
                $('.scrolldn').fadeOut();
            }
        });

	// var container = document.getElementById('scroll-gallery_art');
	$('.scroll-button.scroll-right').click(function() {
		$('.scroll-gallery_art').animate( {scrollLeft: '+=300' }, 1000);
		// !!! ^ "+=" is an unexpected token; fix somehow?
	});

	$('.scroll-button.scroll-left').click(function() {
		$('.scroll-gallery_art').animate( {scrollLeft: '-=300' }, 1000);
	});

	$('.scroll-button.scroll-down').click(function() {
		$('.scroll-gallery_text .description').animate( {scrollTop: '+=300' }, 1000);
	});


	// for smoother transition, animate scrollLeft
	//container.scrollLeft += 300;
	//$(container).animate( {scrollLeft: += 300 }, 500);
});
