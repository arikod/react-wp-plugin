<?php

namespace Arikod;

class Plugin {

    public function __construct() {
        $this->init();
    }

    public function activate() {}
    public function deactivate() {}
    
    /**
     * Initialize plugin
     */
    private function init() {
        define( 'ARIKOD_PLUGIN_PATH', untrailingslashit( plugin_dir_path( __DIR__ ) ) );
        define( 'ARIKOD_PLUGIN_URL', untrailingslashit( plugin_dir_url( __DIR__ ) ) );
        define( 'ARIKOD_PLUGIN_BUILD_PATH', ARIKOD_PLUGIN_PATH . '/assets/react' );
        define( 'ARIKOD_PLUGIN_BUILD_URL', ARIKOD_PLUGIN_URL . '/assets/react' );
        define( 'ARIKOD_PLUGIN_VERSION', '1.0.0' );

        add_action( 'admin_menu', array( $this, 'add_admin_pages' ) );

        new Assets();
    }

    public function add_admin_pages() {
        add_menu_page( 'Arıkod', 'Arıkod', 'manage_options', 'arikod_plugin', array( $this, 'admin_index' ), 'dashicons-buddicons-replies', 110 );
    }

    public function admin_index() {
        require_once ARIKOD_PLUGIN_PATH . '/views/react-app-div.php';
    }

}