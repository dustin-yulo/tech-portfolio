jQuery( document ).ready( function( $ ) {

    // Mobile menu toggle
    $( '#mobile-header .menu-toggle' ).on( 'click', function() {
        $( '#mobile-header #mobile-topbar .menu-toggle, #mobile-header #mobile-topbar-dropdown' ).toggleClass( 'active' );
    } );

} );