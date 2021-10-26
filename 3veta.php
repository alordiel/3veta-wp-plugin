<?php
/**
 * Plugin Name:       3Veta
 * Plugin URI:        https://wordpress.org/plugins/3veta/
 * Description:
 * Version:           0.1
 * Author:            alordiel
 * Author URI:        http://profiles.wordpress.org/alordiel
 * Text Domain:       3veta
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages/
 * GitHub Plugin URI: https://github.com/alordiel/dropdown-multisite-selector
 */

/*  Copyright 2014-2021 Alexander Vasilev  (email : alexander.vasilev@protonmail.com)

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License, version 2, as
	published by the Free Software Foundation.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'DMS_PLUGINS_DIR_ABS', __DIR__ );
define( 'DMS_PLUGINS_DIR_REL', plugins_url( basename( __DIR__ ) ) );

include_once( DMS_PLUGINS_DIR_ABS . platformSlashes( '/inc/admin-page.php' ) );

function platformSlashes( $path ) {
	return str_replace( '/', DIRECTORY_SEPARATOR, $path );
}
