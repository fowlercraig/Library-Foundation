<?php

require_once locate_template('/lib/blankslate.php');         
require_once locate_template('/lib/activation.php');         
require_once locate_template('/lib/themewrangler.class.php');
require_once locate_template('/lib/slug.php' );
require_once locate_template('/lib/cleanassnav.php' );
include_once locate_template('/lib/soil-master/soil.php' );
include_once locate_template('/lib/custom-post-types.php' );
include_once locate_template('/lib/enque-js.php' );
include_once locate_template('/lib/woo-disablebilling.php' );
include_once locate_template('/lib/json-api/json-api.php' );

// ACF Includes Nonsense

add_filter('acf/settings/path', 'my_acf_settings_path');
function my_acf_settings_path( $path ) {
    $path = get_stylesheet_directory() . '/lib/advanced-custom-fields-pro/';
    return $path;
}
 
add_filter('acf/settings/dir', 'my_acf_settings_dir');
function my_acf_settings_dir( $dir ) {
     $dir = get_stylesheet_directory_uri() . '/lib/advanced-custom-fields-pro/';
    return $dir;
}

include_once locate_template('/lib/advanced-custom-fields-pro/acf.php' );
//include_once locate_template('/lib/acf-field-date-time-picker/acf-date_time_picker.php' );

include_once locate_template('/lib/soil-master/soil.php' );
include_once locate_template('/lib/roots-rewrites-master/roots-rewrites.php' );
include_once locate_template('/lib/opengraph/opengraph.php' );

add_theme_support('soil-relative-urls');
add_theme_support('soil-nice-search');
add_theme_support('soil-clean-up');

define('WOOCOMMERCE_USE_CSS', false);
add_theme_support( 'woocommerce' );

//define( 'ACF_LITE', true );

$settings = array(

'available_scripts' => array(
'jquery-g'          => array('//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js','1.11.1'),
'scripts'           => array('/assets/javascripts/scripts.min.js'),
),

'default_scripts'   => array(
'scripts'),

'available_stylesheets' => array(
'default'           => array('/assets/css/main.css'),
),

'default_stylesheets' => array(
'default'
),

'deregister_scripts' => array('jquery','l10n')
);

if(function_exists("acf_add_options_page")) {
  acf_add_options_page();
  }

if(function_exists("register_options_page")) {
  register_options_page('Site Options');
  register_options_page('Calendar Options');
  register_options_page('Aloud Options');
}

Themewrangler::set_defaults( $settings );


function wcs_redirect_product_based ( $order_id ){
  $order = wc_get_order( $order_id );

  foreach( $order->get_items() as $item ) {
    $_product = wc_get_product( $item['product_id'] );
    // Add whatever product id you want below here
    if ( $item['product_id'] == 52 ) {
      // change below to the URL that you want to send your customer to
      wp_redirect('/thanks');
    }
  }
}
add_action( 'woocommerce_thankyou', 'wcs_redirect_product_based' ); 