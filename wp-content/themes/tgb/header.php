<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TGB
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'tgb' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$tgb_description = get_bloginfo( 'description', 'display' );
			if ( $tgb_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $tgb_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
		
		<ul class="nav-tools">
		<li class="mobile-menu-btn" id="mobile-menu-btn"><div id="mobile-menu-toggle" class="toggle-menu toggle-menu-mobile" data-toggle="mobile-menu" data-effect="hover"><div class="btn-inner"><span></span></div></div></li>
		</ul>

    <nav id="mobile-nav" class="mobile-nav">
		<div class="container">
		    <ul class="mobile-close">
		       <li class="mobile-close-menu-btn" id="mobile-close-menu-btn"></li>
		       
		       </ul> 
		       <div class="search-tool">
					<a href="#" class="tools-btn" data-toggle-search="fullscreen">
						<span class="tools-btn-icon">
							<i class="ti-search header-search-icon"></i>
							<i class="ti-close search-close"></i>
						</span>
					</a>
				<div class="ins-header-search-main">
					<div class="ins-header-search">
						<div class="ins-search-wrap">
							<form action="'.esc_url( home_url() ).'">
							<i class="fa fa-search fullscreen-search-icon" aria-hidden="true"></i><input type="text" name="s" value="" autocomplete="off" placeholder="Search The Guide Book">
							
							</form>
						</div>
					</div>
				</div>
			</div>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</div>
	</nav>


		<nav id="site-navigation" class="main-navigation">
		    
		
		
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
