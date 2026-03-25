<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
    require_once __DIR__ . '/vendor/autoload.php';
}

Timber\Timber::init();

require_once __DIR__ . '/includes/timber.php';
require_once __DIR__ . '/includes/setup.php';
require_once __DIR__ . '/includes/cpt.php';