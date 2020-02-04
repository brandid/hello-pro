( function( api ) {
    'use strict';

    // Bind an API event to the 'ready' state
    api.bind( 'ready', function() {

        // Call a function based on the 'enable_blog_grid_layout' setting
        api( 'enable_blog_grid_layout', function(setting) {
            var linkSettingValueToControlActiveState;

            /**
             * Update a control's active state according to the enable_blog_grid_layout setting's value.
             *
             * @param {api.Control} control Boxed body control.
             */
            linkSettingValueToControlActiveState = function( control ) {
                var visibility = function() {
                    if ( true === setting.get() || 1 === setting.get() ) {
                        control.container.slideDown( 180 );
                    } else {
                        control.container.slideUp( 180 );
                    }
                };

                // Set initial active state.
                visibility();
                // Update activate state whenever the setting is changed.
                setting.bind( visibility );
            };

            // Call linkSettingValueToControlActiveState on a control when it exists.
            api.control( 'blog_grid_cols', linkSettingValueToControlActiveState );
        });

    });

}( wp.customize ) );
