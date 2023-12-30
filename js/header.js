/**
 * header.js
 * 
 * Change header appearance by adding and removing class name on scroll.
 */
( function() {
	const mastHead = document.getElementById( 'masthead' );

	window.addEventListener( 'scroll', function() {
		const value = window.scrollY; // calculates how many pixcels scrolled from top

		if ( value > 100 ) {
			mastHead.classList.add( 'header-scrolled' );
		}
		else {
			mastHead.classList.remove( 'header-scrolled' );
		}
	} );
	
}() );
