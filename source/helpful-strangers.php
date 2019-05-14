<?php
/**
 * @package HelpfulStrangers
 * @version 1.0.0
 */

/*
Plugin Name: Helpful Strangers
Plugin URI: https://github.com/revnoah/wordpress-helpful-strangers#readme
Description: WordPress plugin with several helper functions present in other frameworks to help with development.
Author: Noah Stewart
Version: 1.0.0
Author URI: http://noahjstewart.com/
*/

//load required includes
require_once realpath(__DIR__) . '/includes/helpers.inc.php';
require_once realpath(__DIR__) . '/includes/form.inc.php';
require_once realpath(__DIR__) . '/includes/admin.inc.php';

//register rewrite hook
register_activation_hook(__FILE__, 'helpful_strangers_rewrite_activation');
register_deactivation_hook(__FILE__, 'helpful_strangers_rewrite_activation');

/**
 * Handle rewrite rules
 *
 * @return void
 */
function helpful_strangers_rewrite_activation(){
	flush_rewrite_rules();
}
