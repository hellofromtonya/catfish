<?php
/**
 * Minimized Catfish build runtime configuration parameters
 *
 * @package     Catfish\Asset\Repo;
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        http://hellofromtonya.com
 * @license     GNU General Public License 2.0+
 */

namespace Catfish\Asset\Repo;

use Catfish\Plugin;

return array(
	'is_script' => true,
	'handle'    => 'catfish_js',
	'config'    => array(
		'file'                 => CATFISH_PLUGIN_URL . 'assets/build/jquery.plugin.min.js',
		'deps'                 => array( 'jquery' ),
		'version'              => Plugin::VERSION,
		'in_footer'            => true,
	),
);
