<?php
/**
 * Block Patterns
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern/
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern_category/
 *
 * @package WordPress
 * @subpackage Trister_Theme
 * @since Trister Theme 1.6
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'tristertheme',
		array( 'label' => esc_html__( 'Trister Theme', 'tristertheme' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {

	// Call to Action.
	register_block_pattern(
		'tristertheme/call-to-action',
		array(
			'title'         => esc_html__( 'Call to Action', 'tristertheme' ),
			'categories'    => array( 'tristertheme' ),
			'viewportWidth' => 1400,
			'content'       => implode(
				'',
				array(
					'<!-- wp:group {"align":"wide","style":{"color":{"background":"#ffffff"}}} -->',
					'<div class="wp-block-group alignwide has-background" style="background-color:#ffffff"><div class="wp-block-group__inner-container"><!-- wp:group -->',
					'<div class="wp-block-group"><div class="wp-block-group__inner-container"><!-- wp:heading {"align":"center"} -->',
					'<h2 class="has-text-align-center">' . esc_html__( 'Support the Museum and Get Exclusive Offers', 'tristertheme' ) . '</h2>',
					'<!-- /wp:heading -->',
					'<!-- wp:paragraph {"align":"center"} -->',
					'<p class="has-text-align-center">' . esc_html__( 'Members get access to exclusive exhibits and sales. Our memberships cost $99.99 and are billed annually.', 'tristertheme' ) . '</p>',
					'<!-- /wp:paragraph -->',
					'<!-- wp:button {"align":"center","className":"is-style-outline"} -->',
					'<div class="wp-block-button aligncenter is-style-outline"><a class="wp-block-button__link" href="#">' . esc_html__( 'Become a Member', 'tristertheme' ) . '</a></div>',
					'<!-- /wp:button --></div></div>',
					'<!-- /wp:group --></div></div>',
					'<!-- /wp:group -->',
				)
			),
		)
	);

	// Double Call to Action.
	register_block_pattern(
		'tristertheme/double-call-to-action',
		array(
			'title'         => esc_html__( 'Double Call to Action', 'tristertheme' ),
			'categories'    => array( 'tristertheme' ),
			'viewportWidth' => 1400,
			'content'       => implode(
				'',
				array(
					'<!-- wp:columns {"align":"wide"} -->',
					'<div class="wp-block-columns alignwide"><!-- wp:column -->',
					'<div class="wp-block-column"><!-- wp:group {"style":{"color":{"background":"#ffffff"}}} -->',
					'<div class="wp-block-group has-background" style="background-color:#ffffff"><div class="wp-block-group__inner-container"><!-- wp:heading {"align":"center"} -->',
					'<h2 class="has-text-align-center">' . esc_html__( 'The Museum', 'tristertheme' ) . '</h2>',
					'<!-- /wp:heading -->',
					'<!-- wp:paragraph {"align":"center"} -->',
					'<p class="has-text-align-center">' . esc_html__( 'Award-winning exhibitions featuring internationally-renowned artists.', 'tristertheme' ) . '</p>',
					'<!-- /wp:paragraph -->',
					'<!-- wp:buttons {"align":"center"} -->',
					'<div class="wp-block-buttons aligncenter"><!-- wp:button {"className":"is-style-outline"} -->',
					'<div class="wp-block-button is-style-outline"><a class="wp-block-button__link">' . esc_html__( 'Read More', 'tristertheme' ) . '</a></div>',
					'<!-- /wp:button --></div>',
					'<!-- /wp:buttons --></div></div>',
					'<!-- /wp:group --></div>',
					'<!-- /wp:column -->',
					'<!-- wp:column -->',
					'<div class="wp-block-column"><!-- wp:group {"style":{"color":{"background":"#ffffff"}}} -->',
					'<div class="wp-block-group has-background" style="background-color:#ffffff"><div class="wp-block-group__inner-container"><!-- wp:heading {"align":"center"} -->',
					'<h2 class="has-text-align-center">' . esc_html__( 'The Store', 'tristertheme' ) . '</h2>',
					'<!-- /wp:heading -->',
					'<!-- wp:paragraph {"align":"center"} -->',
					'<p class="has-text-align-center">' . esc_html__( 'An awe-inspiring collection of books, prints, and gifts from our exhibitions.', 'tristertheme' ) . '</p>',
					'<!-- /wp:paragraph -->',
					'<!-- wp:buttons {"align":"center"} -->',
					'<div class="wp-block-buttons aligncenter"><!-- wp:button {"className":"is-style-outline"} -->',
					'<div class="wp-block-button is-style-outline"><a class="wp-block-button__link">' . esc_html__( 'Shop Now', 'tristertheme' ) . '</a></div>',
					'<!-- /wp:button --></div>',
					'<!-- /wp:buttons --></div></div>',
					'<!-- /wp:group --></div>',
					'<!-- /wp:column --></div>',
					'<!-- /wp:columns -->',
				)
			),
		)
	);

	// Event Details.
	register_block_pattern(
		'tristertheme/event-details',
		array(
			'title'         => esc_html__( 'Event Details', 'tristertheme' ),
			'categories'    => array( 'tristertheme' ),
			'viewportWidth' => 1400,
			'content'       => implode(
				'',
				array(
					'<!-- wp:group {"align":"wide","backgroundColor":"primary"} -->',
					'<div class="wp-block-group alignwide has-primary-background-color has-background"><div class="wp-block-group__inner-container"><!-- wp:columns -->',
					'<div class="wp-block-columns"><!-- wp:column -->',
					'<div class="wp-block-column"><!-- wp:paragraph {"align":"center","textColor":"background","fontSize":"large"} -->',
					'<p class="has-text-align-center has-background-color has-text-color has-large-font-size">' . wp_kses_post( __( '<em>Dates</em><br>Aug 1 — Dec 1', 'tristertheme' ) ) . '</p>',
					'<!-- /wp:paragraph --></div>',
					'<!-- /wp:column -->',
					'<!-- wp:column -->',
					'<div class="wp-block-column"><!-- wp:paragraph {"align":"center","textColor":"background","fontSize":"large"} -->',
					'<p class="has-text-align-center has-background-color has-text-color has-large-font-size">' . wp_kses_post( __( '<em>Location</em><br>Exhibit Hall B', 'tristertheme' ) ) . '</p>',
					'<!-- /wp:paragraph --></div>',
					'<!-- /wp:column -->',
					'<!-- wp:column -->',
					'<div class="wp-block-column"><!-- wp:paragraph {"align":"center","textColor":"background","fontSize":"large"} -->',
					'<p class="has-text-align-center has-background-color has-text-color has-large-font-size">' . wp_kses_post( __( '<em>Price</em><br>Included', 'tristertheme' ) ) . '</p>',
					'<!-- /wp:paragraph --></div>',
					'<!-- /wp:column --></div>',
					'<!-- /wp:columns --></div></div>',
					'<!-- /wp:group -->',
				)
			),
		)
	);

	// Featured Content.
	register_block_pattern(
		'tristertheme/featured-content',
		array(
			'title'         => esc_html__( 'Featured Content', 'tristertheme' ),
			'categories'    => array( 'tristertheme' ),
			'viewportWidth' => 1400,
			'content'       => implode(
				'',
				array(
					'<!-- wp:columns {"align":"wide"} -->',
					'<div class="wp-block-columns alignwide"><!-- wp:column -->',
					'<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full"} -->',
					'<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/2020-three-quarters-1.png" alt="' . esc_attr__( 'Abstract Rectangles', 'tristertheme' ) . '"/></figure>',
					'<!-- /wp:image -->',
					'<!-- wp:heading -->',
					'<h2>' . esc_html__( 'Works and Days', 'tristertheme' ) . '</h2>',
					'<!-- /wp:heading -->',
					'<!-- wp:paragraph {"fontSize":"larger"} -->',
					'<p class="has-larger-font-size">' . esc_html__( 'August 1 — December 1', 'tristertheme' ) . '</p>',
					'<!-- /wp:paragraph -->',
					'<!-- wp:button {"align":"left","className":"is-style-outline"} -->',
					'<div class="wp-block-button alignleft is-style-outline"><a class="wp-block-button__link" href="#">' . esc_html__( 'Read More', 'tristertheme' ) . '</a></div>',
					'<!-- /wp:button --></div>',
					'<!-- /wp:column -->',
					'<!-- wp:column -->',
					'<div class="wp-block-column"><!-- wp:image {sizeSlug":"full"} -->',
					'<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/2020-three-quarters-2.png" alt="' . esc_attr__( 'Abstract Rectangles', 'tristertheme' ) . '"/></figure>',
					'<!-- /wp:image -->',
					'<!-- wp:heading -->',
					'<h2>' . esc_html__( 'The Life I Deserve', 'tristertheme' ) . '</h2>',
					'<!-- /wp:heading -->',
					'<!-- wp:paragraph {"fontSize":"larger"} -->',
					'<p class="has-larger-font-size">' . esc_html__( 'August 1 — December 1', 'tristertheme' ) . '</p>',
					'<!-- /wp:paragraph -->',
					'<!-- wp:button {"align":"left","className":"is-style-outline"} -->',
					'<div class="wp-block-button alignleft is-style-outline"><a class="wp-block-button__link" href="#">' . esc_html__( 'Read More', 'tristertheme' ) . '</a></div>',
					'<!-- /wp:button --></div>',
					'<!-- /wp:column --></div>',
					'<!-- /wp:columns -->',
				)
			),
		)
	);

	// Introduction.
	register_block_pattern(
		'tristertheme/introduction',
		array(
			'title'         => esc_html__( 'Introduction', 'tristertheme' ),
			'categories'    => array( 'tristertheme' ),
			'viewportWidth' => 1400,
			'content'       => implode(
				'',
				array(
					'<!-- wp:heading {"align":"center"} -->',
					'<h2 class="has-text-align-center">' . esc_html__( 'The Premier Destination for Modern Art in Sweden', 'tristertheme' ) . '</h2>',
					'<!-- /wp:heading -->',
					'<!-- wp:paragraph {"dropCap":true} -->',
					'<p class="has-drop-cap">' . esc_html__( 'With seven floors of striking architecture, UMoMA shows exhibitions of international contemporary art, sometimes along with art historical retrospectives. Existential, political, and philosophical issues are intrinsic to our program. As visitor, you are invited to guided tours artist talks, lectures, film screenings, and other events with free admission.', 'tristertheme' ) . '</p>',
					'<!-- /wp:paragraph -->',
				)
			),
		)
	);
}
