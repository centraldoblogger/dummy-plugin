<?php
/*
Plugin Name: Dummy Plugin
Plugin URI: https://froger.me/
Description: Empty plugin to demonstrate the WP Plugin Updater.
Version: 1.7.14
Author: Alexandre Froger
Author URI: https://froger.me/
Icon1x: https://raw.githubusercontent.com/froger-me/wp-plugin-update-server/master/examples/icon-128x128.png
Icon2x: https://raw.githubusercontent.com/froger-me/wp-plugin-update-server/master/examples/icon-256x256.png
BannerHigh: https://raw.githubusercontent.com/froger-me/wp-plugin-update-server/master/examples/banner-1544x500.png
BannerLow: https://raw.githubusercontent.com/froger-me/wp-plugin-update-server/master/examples/banner-722x250.png
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}



require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/centraldoblogger/dummy-plugin/',
	__FILE__,
	'unique-plugin-or-theme-slug'
);

//Optional: If you're using a private repository, specify the access token like this:
$myUpdateChecker->setAuthentication('your-token-here');

//Optional: Set the branch that contains the stable release.
$myUpdateChecker->setBranch('stable-branch-name');

