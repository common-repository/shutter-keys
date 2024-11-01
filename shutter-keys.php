<?php
/*
Plugin Name: Shutter Keys
Plugin URI: http://zeta-two.com/programmering
Description: Enables keyboard arrow keys for shutter browsing.
Version: 1.0.1
Author: Calle "Zeta Two" Svensson
Author URI: http://zeta-two.com
*/
?>
<?php
/*  Copyright YEAR  PLUGIN_AUTHOR_NAME  (email : PLUGIN AUTHOR EMAIL)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
?>
<?php
function shutter_keys_load()
{
	wp_enqueue_script('shutterkeys', WP_PLUGIN_URL.'/shutter-keys/shutter-keys.js', array('shutter','jquery'));
}
?>
<?php
add_action('plugins_loaded', 'shutter_keys_load');
?>