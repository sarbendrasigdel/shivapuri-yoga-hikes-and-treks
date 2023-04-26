<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Poseidon
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>

	<?php do_action( 'poseidon_before_site' ); ?>

	<div id="page" class="hfeed site">

		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'poseidon' ); ?></a>

		<?php do_action( 'poseidon_before_header' ); ?>

		<?php do_action( 'poseidon_header_bar' ); ?>

		<header id="masthead" class="site-header clearfix" role="banner">

			<div class="header-main container clearfix">

				<div id="logo" class="site-branding clearfix">

					<?php poseidon_site_logo(); ?>
					<?php poseidon_site_title(); ?>
					<?php poseidon_site_description(); ?>

				</div><!-- .site-branding -->

				<?php get_template_part( 'template-parts/header/site', 'navigation' ); ?>

			</div><!-- .header-main -->

		</header><!-- #masthead -->
		<?php
/**
 * Main Navigation
 *
 * @version 1.1
 * @package Poseidon
 */
?>

<?php if ( has_nav_menu( 'primary' ) ) : ?>

	<button class="primary-menu-toggle menu-toggle" aria-controls="primary-menu" aria-expanded="false" <?php poseidon_amp_menu_toggle(); ?>>
		<?php
		echo poseidon_get_svg( 'menu' );
		echo poseidon_get_svg( 'close' );
		?>
		<span class="menu-toggle-text screen-reader-text"><?php esc_html_e( 'Menu', 'poseidon' ); ?></span>
	</button>
	<div class="primary-navigation">
<nav class="main-navigation custom-menu" role="navigation" <?php poseidon_amp_menu_is_toggled(); ?> aria-label="<?php esc_attr_e( 'DOWN', 'poseidon' ); ?>">

			<?php
			wp_nav_menu(
				array(
					'theme_location' => '',
					'menu_id'        => 'down',
					'container'      => true,
				)
			);
			?>

		</nav><!-- #site-navigation -->
	</div><!-- .primary-navigation -->
<?php endif; ?>

<?php do_action( 'poseidon_after_navigation' ); ?>


		<?php do_action( 'poseidon_after_header' ); ?>

		<?php poseidon_header_image(); ?>

		<?php poseidon_slider(); ?>

		<?php poseidon_breadcrumbs(); ?>

		<div id="content" class="site-content container clearfix">
