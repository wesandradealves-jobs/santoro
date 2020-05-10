<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Acme Themes
 * @subpackage Lawyer Zone
 */

/**
 * lawyer_zone_action_before_head hook
 * @since Lawyer Zone 1.0.0
 *
 * @hooked lawyer_zone_set_global -  0
 * @hooked lawyer_zone_doctype -  10
 */
do_action( 'lawyer_zone_action_before_head' );?>
	<head>

		<?php
		/**
		 * lawyer_zone_action_before_wp_head hook
		 * @since Lawyer Zone 1.0.0
		 *
		 * @hooked lawyer_zone_before_wp_head -  10
		 */
		do_action( 'lawyer_zone_action_before_wp_head' );

		wp_head();
		?>

	</head>
<body <?php body_class();?>>

<?php
/**
 * lawyer_zone_action_before hook
 * @since Lawyer Zone 1.0.0
 *
 * @hooked lawyer_zone_site_start - 20
 */
do_action( 'lawyer_zone_action_before' );

/**
 * lawyer_zone_action_before_header hook
 * @since Lawyer Zone 1.0.0
 *
 * @hooked lawyer_zone_skip_to_content - 10
 */
do_action( 'lawyer_zone_action_before_header' );

/**
 * lawyer_zone_action_header hook
 * @since Lawyer Zone 1.0.0
 *
 * @hooked lawyer_zone_header - 10
 */
do_action( 'lawyer_zone_action_header' );

/**
 * lawyer_zone_action_after_header hook
 * @since Lawyer Zone 1.0.0
 *
 * @hooked null
 */
do_action( 'lawyer_zone_action_after_header' );

/**
 * lawyer_zone_action_before_content hook
 * @since Lawyer Zone 1.0.0
 *
 * @hooked null
 */
do_action( 'lawyer_zone_action_before_content' );