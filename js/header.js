/**
 * header.js
 * 
 * Change header appearance by adding and removing class name on scroll.
 */
( function() {
	const mastHead = document.getElementById( 'masthead' );

	window.onscroll = () => {
		// calculates how many pixcels scrolled from top
		if ( window.scrollY > 100 ) { 
			mastHead.classList.add( 'header-scrolled' );
		} else {
			mastHead.classList.remove( 'header-scrolled' );
		}
	};
	
}() );
