/**
 * header.js
 * 
 * Change header appearance by adding and removing class name on scroll.
 */
( function() {
	const mastHead = document.getElementById( 'masthead' );
	const parallaxImg = document.getElementsByClassName("attachment-post-thumbnail")[0];

	window.onscroll = () => {
		// calculates how many pixcels scrolled from top
		if ( window.scrollY > 100 ) { 
			mastHead.classList.add( 'header-scrolled' );
		} else {
			mastHead.classList.remove( 'header-scrolled' );
		}

		// slows down image scroll to create parallax effect
		const value = window.scrollY;
  		parallaxImg.style.top = value * 0.5 + "px";
	};
	
}() );
