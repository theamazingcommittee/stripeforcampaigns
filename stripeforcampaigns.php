<?php
/*
Plugin Name: Stripe for Campaigns
Plugin URI:  http://theamazingcommittee.github.io/stripeforcampaigns/
Description: 
Version:     0.1-dev
Author:      Véronique Bellamy
Author URI:  http://veroniquebellamy.fr/
License:     MIT
The MIT License (MIT)
Copyright (c) 2016 Véronique Bellamy

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
License URI: https://opensource.org/licenses/MIT
Domain Path: /languages
Text Domain: stripeforcampaigns
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

require_once('vendor/autoload.php');

function stripeforcampaigns_install() {
	// Activation function
}
register_activation_hook( __FILE__, 'stripeforcampaigns_install' );

function stripeforcampaigns_uninstall() {
	// Deactivation function
}
register_deactivation_hook( __FILE__, 'stripeforcampaigns_uninstall' );

function stripeforcampaigns_menu() {
	add_options_page('Stripe for Campaigns Options', 'Stripe for Campaigns', 'manage_options', 'stripeforcampaigns-options', 'stripeforcampaigns_options');
}
add_action('admin_menu', 'stripeforcampaigns_menu');
?>