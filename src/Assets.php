<?php

namespace Arikod;

class Assets
{
    public function __construct() {
        $this->init();
    }

    private function init() {
        add_action('admin_enqueue_scripts', [$this, 'arikod_enqueue_scripts']);
    }

    public function arikod_enqueue_scripts() {
        wp_enqueue_script('arikod', ARIKOD_PLUGIN_BUILD_URL  . '/dist/bundle.js', ['jquery', 'wp-element'],wp_rand(),true);
    }
}