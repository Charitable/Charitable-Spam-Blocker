<?php
/**
 * Charitable SpamBlocker Core Functions.
 *
 * @package   Charitable SpamBlocker/Functions/Core
 * @copyright Copyright (c) 2020, Studio 164a
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since     1.0.0
 * @version   1.0.0
 */

use \Charitable\Packages\SpamBlocker\SpamBlocker;
use \Charitable\Packages\SpamBlocker\Deprecated;
use \Charitable\Packages\SpamBlocker\Template;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * This returns the original Charitable_SpamBlocker object.
 *
 * Use this whenever you want to get an instance of the class. There is no
 * reason to instantiate a new object, though you can do so if you're stubborn :)
 *
 * @since   1.0.0
 *
 * @return \Charitable\Pro\SpamBlocker\SpamBlocker
 */
function charitable_spamblocker() {
	return SpamBlocker::get_instance();
}

/**
 * This returns the Charitable_SpamBlocker_Deprecated object.
 *
 * @since  1.0.0
 *
 * @return \Charitable\Pro\SpamBlocker\Deprecated
 */
function charitable_spamblocker_deprecated() {
	return Deprecated::get_instance();
}

/**
 * Displays a template.
 *
 * @since  1.0.0
 *
 * @param  string|array $template_name A single template name or an ordered array of template.
 * @param  array        $args          Optional array of arguments to pass to the view.
 * @return \Charitable\Pro\SpamBlocker\Template
 */
// function charitable_spamblocker_template( $template_name, array $args = array() ) {
// 	if ( empty( $args ) ) {
// 		$template = new Template( $template_name );
// 	} else {
// 		$template = new Template( $template_name, false );
// 		$template->set_view_args( $args );
// 		$template->render();
// 	}

// 	return $template;
// }
