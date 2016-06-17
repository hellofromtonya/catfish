<?php
/**
 * Catfish Plugin - This plugin is an addon for Fulcrum.
 *
 * @package         Catfish
 * @author          hellofromTonya
 * @license         GPL-2.0+
 * @link            http://hellofromtonya.com
 *
 * @wordpress-plugin
 * Plugin Name:     Fulcrum Catfish
 * Plugin URI:      http://hellofromtonya.com
 * Description:     Catfish Plugin - Adds a sticky footer toolbar to your website with social share, comments link, and scroll to top.
 * Version:         1.0.0
 * Author:          hellofromTonya
 * Author URI:      http://hellofromtonya.com
 * Text Domain:     catfish
 * Requires WP:     3.5
 * Requires PHP:    5.4
 */

/*
	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

namespace Catfish;

use Fulcrum\Config\Config;
use Fulcrum\Fulcrum_Contract;

fulcrum_prevent_direct_file_access();

fulcrum_declare_plugin_constants( 'CATFISH', __FILE__ );

add_action( 'fulcrum_is_loaded', __NAMESPACE__ . '\launch' );
/**
 * Launch the plugin
 *
 * @since 1.0.0
 *
 * @param Fulcrum_Contract $fulcrum Instance of Fulcrum
 *
 * @return void
 */
function launch( Fulcrum_Contract $fulcrum ) {
	load_dependencies();

	return load_plugin( $fulcrum );
}

/**
 * To speed everything up, we are loading files directly here.
 *
 * @since 1.0.0
 *
 * @return void
 */
function load_dependencies() {
	require_once( __DIR__ . '/src/class-plugin.php' );
}

/**
 * Load up the plugin
 *
 * @since 1.0.0
 *
 * @param Fulcrum_Contract $fulcrum Instance of Fulcrum
 *
 * @return Plugin
 */
function load_plugin( Fulcrum_Contract $fulcrum ) {
	$path = __DIR__ . '/config/plugin.php';

	$fulcrum['fulcrum_social_share'] = $instance = new Plugin(
		new Config( $path ),
		__FILE__,
		$fulcrum
	);

	return $instance;
}
