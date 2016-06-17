<?php
/**
 * Catfish Plugin Runtime Configuration Parameters.
 *
 * @package     Catfish
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        http://hellofromtonya.com
 * @license     GNU General Public License 2.0+
 */

namespace Catfish;

return array(

	'plugin_activation_keys' => array(),

	'service_providers' => array(
		// This is the minified live site scripts
		'script.catfish'   => array(
			'provider' => 'provider.asset',
			'config'   => CATFISH_PLUGIN_DIR . 'config/assets/plugin-build.php',
		),
	),

	'view'           => CATFISH_PLUGIN_DIR . '/src/views/catfish.php',
	'twitter_handle' => '@hellofromtonya',
	'share_text'     => '',
);
