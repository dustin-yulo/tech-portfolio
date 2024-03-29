jQuery( document ).ready( function( $ ) {

    // LOAD ON SCROLL - PROJECTS
    var page = 2;
    var isLoading = false;
    var hasMoreProjects = true;

    $( window ).on( 'scroll', function() {
        if( !isLoading && hasMoreProjects && $( window ).scrollTop() + $( window ).height() >= $( '.projects-container' ).offset().top + $( '.projects-container' ).height() ) {

            isLoading = true;
            
            $.ajax( {
                url: ajax_object.ajax_url,
                type: 'POST',
                data: {
                    'action': 'load_projects',
                    'page': page,
                },
                beforeSend: function() {
                    $( '.loader' ).show();
                },
                success: function( response ) {
                    if( response.html ) {
                        $( '.projects-container' ).append( response.html );
                        page++;
                    }
                    
                    hasMoreProjects = response.has_more_projects;
                },
                complete: function() {
                    $( '.loader' ).hide();
                    isLoading = false;
                }
            } );
        }
    } ); 

} );