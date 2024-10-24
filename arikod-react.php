<?php
/**
 * Plugin Name:       Arikod
 * Description:       A Job posting platform made by WordPress.
 * Version:           0.0.1
 * Author:            Bekir Gülmüş
 * Text Domain:       https://arikod.com
 */

require_once 'vendor/autoload.php';

use Arikod\Plugin;

if ( class_exists( 'Arikod\Plugin' ) ) {
    $the_plugin = new Plugin();
}

register_activation_hook( __FILE__, [ $the_plugin, 'activate' ] );
register_deactivation_hook( __FILE__, [ $the_plugin, 'deactivate' ] );