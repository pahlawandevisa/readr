<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Readr
 * @since Readr 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width"/>
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11"/>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>

	<?php wp_head(); ?>
	</head>

<?php $readrOptions = get_option('readr'); ?>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site <?php echo $readrOptions['style']; ?>">

	<div id="masthead" class="site-header" role="banner">
		<div class="header-content">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			<?php get_search_form(); ?>
			<div id="site-navigation" class="main-navigation clearfix" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
			</div>
			<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
                <div id="secondary" class="main-navigation clearfix" role="complementary">
                    <?php dynamic_sidebar( 'sidebar-1' ); ?>
                </div><!-- #secondary -->
            <?php endif; ?>
		</div>
	</div>

	<div id="main" class="wrapper">