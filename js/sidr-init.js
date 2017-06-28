/**
 * File sidr-init.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */

jQuery(document).ready(function(e) {
    e(".nav-toggle").sidr({
        side: 'right'
    });
});

// ( function() {

// 	var options = {
// 		side: 'right'
// 	};

// 	var menu = new sidr('#nav-toggle', options);


// } )();