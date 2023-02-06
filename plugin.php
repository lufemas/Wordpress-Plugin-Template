<?php
/*
Plugin Name:	Custom Plugin
Plugin URI:		https://lufemas.com
Description:	Custom functions
Version:		1.1.0
Author:			Luis Fernando Maschietto Junior
Author URI:		https://jrmaschietto.com
License:		GPL-2.0+
License URI:	http://www.gnu.org/licenses/gpl-2.0.txt

This plugin is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

This plugin is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with This plugin. If not, see {URI to Plugin License}.
*/

if (!defined('WPINC')) {
	die;
}

add_action('wp_enqueue_scripts', 'custom_enqueue_files');
/**
 * Loads <list assets here>.
 */
function custom_enqueue_files()
{}

/*********************************************************************************/

/**
 * Edit my account menu order
 */

function my_function()
{
	...
}
add_filter('the_hook', 'my_function');
