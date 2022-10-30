<?php
/**
 * Customizer Separator Control settings for this theme.
 *
 * @package WordPress
 * @subpackage Trister_Theme
 * @since Trister Theme 1.0
 */

if ( class_exists( 'WP_Customize_Control' ) ) {

	if ( ! class_exists( 'tristertheme_Separator_Control' ) ) {
		/**
		 * Separator Control.
		 *
		 * @since Trister Theme 1.0
		 */
		class tristertheme_Separator_Control extends WP_Customize_Control {
			/**
			 * Render the hr.
			 *
			 * @since Trister Theme 1.0
			 */
			public function render_content() {
				echo '<hr/>';
			}

		}
	}
}
