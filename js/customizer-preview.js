(function($, api) {
    'use strict';

    // Enable Blog Grid Layout Toggle.
    api( 'enable_blog_grid_layout', function(value) {
        value.bind(function(newval) {
            if (newval) {
                $( 'body' ).wrapInner( '<div class="enable_blog_grid_layout_wrapper" />' );
            } else {
                $( '.enable_blog_grid_layout_wrapper' ).contents().unwrap();
            }
        });
    });

})(jQuery, wp.customize);
