<?php
/**
 * @formatter:off
 * Plugin Name: Google Ads for CAOS
 * Plugin URI: https://daan.dev/google-adwords-caos/
 * Description: Track Google Ads conversions with CAOS.
 * Version: 1.0.2
 * Author: Daan van den Bergh
 * Author URI: https://daan.dev
 * License: GPL2v2 or later
 * @formatter:on
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * To add support for your Google Ads account, simply add the highlighted line to your Google tag, replacing “TAG_ID” with the unique ID supplied to
 * you when you set up your conversion tracking tags.
 * @see https://support.google.com/google-ads/answer/7548399?hl=en
 * @return void
 */
function caos_google_ads() {
	$ads_id = 'YOUR-ADS-ID';

	echo "gtag('config', '$ads_id');";
}

add_action( 'caos_gtag_additional_config', 'caos_google_ads' );
