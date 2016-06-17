<?php
/**
 * Catfish - adds a sticky footer toolbar
 *
 * @package     Catfish
 * @since       1.0.1
 * @author      hellofromTonya
 * @link        http://hellofromtonya.com
 * @license     GNU General Public License 2.0+
 */

namespace Catfish;

use Fulcrum\Addon\Addon;

class Plugin extends Addon {

	/**
	 * The plugin's version
	 *
	 * @var string
	 */
	const VERSION = '1.0.1';

	/**
	 * The plugin's minimum WordPress requirement
	 *
	 * @var string
	 */
	const MIN_WP_VERSION = '3.5';

	/**
	 * Post Title
	 *
	 * @var string
	 */
	protected $title;

	/**
	 * Sanitized Post Title
	 *
	 * @var string
	 */
	protected $title_attribute;

	/**
	 * Post URL
	 *
	 * @var string
	 */
	protected $url;

	/**
	 * Post URL encoded
	 *
	 * @var string
	 */
	protected $url_attribute;

	/*************************
	 * Instantiate & Init
	 ************************/

	/**
	 * Addons can overload this method for additional functionality
	 *
	 * @since 1.0.0
	 *
	 * @return null
	 */
	protected function init_addon() {
		add_action( 'genesis_before_content', array( $this, 'init_plugin' ) );
	}

	/**
	 * Initialize the plugin.  The catfish is only applied to a single .
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function init_plugin() {
		if ( ! is_single() ) {
			return;
		}

		$this->init_properties();
		
		add_action( 'genesis_after_footer', array( $this, 'render' ) );
	}

	/**
	 * Initialize the needed properties to prepare for rendering the view file.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	protected function init_properties() {
		$this->title           = get_the_title();
		$this->title_attribute = str_replace(' ', '+', $this->title );
		$this->url             = get_permalink();
		$this->url_attribute   = urlencode( $this->url );
	}

	/**
	 * Render the catfish out to the browser by loading the View file.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function render() {
		include( $this->config->view );
	}
}
