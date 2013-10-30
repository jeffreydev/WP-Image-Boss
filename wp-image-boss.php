<?php
/**
Plugin Name: WP Image Boss
Plugin URI: http://jeffreydev.com/plugins/wp-image-boss
Description: Image Managing Plugin.  Allow for multiple slideshows and full control over each.
Version: 1.0.0
Author: JeffreyDev
Author URI: http://jeffreydev.com
*/




    if(!defined( 'WPIB_BASE_URL' )) {
        define( 'WPIB_BASE_URL', plugin_dir_url(__FILE__) );
    }
    
    
    
    /* WPIB INCLUDES */
    include_once dirname( __FILE__ ) . '/admin/classes/class-wpib-setup.php';
    include_once dirname( __FILE__ ) . '/admin/classes/class-wpib-meta-data.php';
    include_once dirname( __FILE__ ) . '/includes/classes/class-wpib-images.php';
    include_once dirname( __FILE__ ) . '/includes/classes/class-wpib-list.php';
    include_once dirname( __FILE__ ) . '/includes/classes/class-wpib-random.php';
    include_once dirname( __FILE__ ) . '/includes/classes/class-wpib-minimal.php';
    
    
    
    
    /* SLIDESHOW SETUP */
    new WPIB_Setup();
    
    /* SLIDESHOW META BOX */
    new WPIB_Meta_Data();
    
    /* SLIDESHOW SHORTCODE */
    new WPIB_Images();
    