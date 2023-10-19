<?php
/**
 * @formatter:off
 * Plugin Name: Google Ads for CAOS
 * Plugin URI: https://daan.dev/google-adwords-caos/
 * Description: Track Google Ads conversions with CAOS.
 * Version: 1.0.1
 * Author: Daan van den Bergh
 * Author URI: https://daan.dev
 * License: GPL2v2 or later
 * @formatter:on
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Replace 'YOUR-ADS-ID' with, well, your Google Ads ID.
 */
function caos_google_ads()
{
    $ads_id = 'YOUR-ADS-ID';

    add_filter(
        'caos_gtag_additional_config',
        function() use ($ads_id) {
            return "gtag('config', '$ads_id');";
        }
    );
}

add_action('caos_process_settings', 'caos_google_ads');
