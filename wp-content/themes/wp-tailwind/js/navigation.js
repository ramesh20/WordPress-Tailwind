/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens.
 */
( function() {
	const menuToggle = document.querySelector( '.menu-toggle' );
	const mobileMenu = document.getElementById( 'mobile-menu' );

	// Return early if elements don't exist.
	if ( ! menuToggle || ! mobileMenu ) {
		return;
	}

	// Toggle mobile menu visibility.
	menuToggle.addEventListener( 'click', function() {
		const isExpanded = menuToggle.getAttribute( 'aria-expanded' ) === 'true';
		menuToggle.setAttribute( 'aria-expanded', ! isExpanded ? 'true' : 'false' );
		mobileMenu.classList.toggle( 'hidden' );
	} );

	// Close menu when clicking outside.
	document.addEventListener( 'click', function( event ) {
		const isInside = menuToggle.contains( event.target ) || mobileMenu.contains( event.target );
		if ( ! isInside && ! mobileMenu.classList.contains( 'hidden' ) ) {
			mobileMenu.classList.add( 'hidden' );
			menuToggle.setAttribute( 'aria-expanded', 'false' );
		}
	} );
}() );
