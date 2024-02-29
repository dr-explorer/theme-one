jQuery( function( $ ) {
   $( '#menu-holder' ).click( function() {
       $( '#site-menu > div' ).slideToggle();
       $( '#site-menu ul' ).slideToggle( "slow" );
   });
});