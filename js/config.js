/* --------------------------------------------------------------------------
 * File        : config.js
 * Version     : 1.0
 * Author      : Indonez Team
 * Author URI  : http://indonez.com
 *
 * Indonez Copyright 2015 All Rights Reserved.
 * -------------------------------------------------------------------------- */

/* --------------------------------------------------------------------------
 * javascript handle initialization
    1. Mediaelement
 *
 * -------------------------------------------------------------------------- */
 
(function($) {

    "use strict";

    var themeApp = {
            //---------- 1. Mediaelement  -----------
            theme_media: function() {
                var media = $('audio, video');

                media.mediaelementplayer();
            },

            // theme init
            theme_init: function() {
                
                themeApp.theme_media(); 
            }

        } //end themeApp


    jQuery(document).ready(function($) {

        themeApp.theme_init();

    });

})(jQuery);