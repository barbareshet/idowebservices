<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package idowebservices
 */

?>
    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <!--Material Design Styles-->

        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="site">
            <a class="skip-link screen-reader-text" href="#content">
                <?php esc_html_e( 'Skip to content', 'idowebservices' ); ?>
            </a>

            <div class="navbar-fixed" id="main-navbar">
                <nav id="site-navigation" class="white" role="navigation">
                    <a href="<?php echo esc_html_e( home_url() );?>" class="brand-logo" id="logo">Ido Web Services</a>

                    <?php wp_nav_menu( array( 
                'theme_location' => 'primary',
                'menu_id' => 'primary-menu',
                'container' => 'div',
                'container_class' => 'nav-wrapper container',
                'menu_id'			=> 'nav-mobile',
	           'menu_class'        => 'right hide-on-med-and-down'
) ); ?>

                </nav>
                <!-- #site-navigation -->

            </div>

            <div id="content" class="site-content">