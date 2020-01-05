<?php
/**
 * @formatter:off
 * Plugin Name: Google Adwords for CAOS
 * Plugin URI: https://daan.dev/google-adwords-caos/
 * Description: Add Google Optimize for CAOS in gtag.js
 * Version: 1.0.0
 * Author: Daan van den Bergh
 * Author URI: https://daan.dev
 * License: GPL2v2 or later
 * @formatter:on
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Replace 'YOUR-ADWORDS-ID' with, well, your Adwords ID.
 */
function caos_google_adwords()
{
    $adwordsId = 'YOUR-ADWORDS-ID';

    if (CAOS_OPT_REMOTE_JS_FILE == 'gtag.js') {
        add_filter(
            'caos_gtag_additional_config',
            function() use ($adwordsId) {
                return "gtag('config', '$adwordsId');";
            }
        );
    }
}

add_action('caos_process_settings', 'caos_google_adwords');
