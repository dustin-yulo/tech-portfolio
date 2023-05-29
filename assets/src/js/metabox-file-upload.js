jQuery( document ).ready( function( $ ) {

    /**
     * @param object    customUploads   our custom data store localized using wp_localize_script
     *                                  so we can use it globally
     */

    const { __ } = wp.i18n;
    
    const fileUploadPreview = $( '#dy-tp-custom-meta-box-project-snapshot-preview' );
    const fileUploadHiddenField = $( '#dy-tp-custom-meta-box-project-snapshot' );
    const fileUploadAddButton = $( '#dy-tp-custom-meta-box-project-snapshot-add-button' );
    const fileUploadDeleteButton = $( '#dy-tp-custom-meta-box-project-snapshot-delete-button' );
    const customUploader = wp.media( {
        title: __( 'Project Snapshot', 'dy-tech-portfolio' ),
        button: {
            text: __( 'Set project snapshot', 'dy-tech-portfolio' )
        },
        multiple: false
    } );

    const toggleVisibility = ( action ) => {
        if ( action === 'ADD' ) {
            fileUploadAddButton.css( 'display', 'none' );
            fileUploadDeleteButton.css( 'display', '' );
        }
        if ( action === 'DELETE' ) {
            fileUploadAddButton.css( 'display', '' );
            fileUploadDeleteButton.css( 'display', 'none' );
            fileUploadPreview.css( 'display', 'none' );
        }
    }

    if ( customUploads.projectSnapshot === '' || customUploads.projectSnapshot.length === 0 ) {
        toggleVisibility('DELETE');
    } else {
        fileUploadPreview.attr( 'src', customUploads.projectSnapshot ).removeAttr( 'style' );
        fileUploadHiddenField.attr( 'value', customUploads.projectSnapshot );
        toggleVisibility('ADD');
    }

    fileUploadAddButton.on( 'click', function () {
        if ( customUploader ) {
            customUploader.open();
        }
    });

    fileUploadDeleteButton.on( 'click', function () {
        fileUploadPreview.removeAttr( 'src' ).css( 'display', 'none' );
        fileUploadHiddenField.removeAttr( 'value' );
        toggleVisibility('DELETE');
    });

    customUploader.on( 'select', function () {
        const attachment = customUploader.state().get( 'selection' ).first().toJSON();

        fileUploadPreview.attr( 'src', attachment.url ).removeAttr('style');
        fileUploadHiddenField.attr( 'value', attachment.url );
        toggleVisibility('ADD');
    });

} );