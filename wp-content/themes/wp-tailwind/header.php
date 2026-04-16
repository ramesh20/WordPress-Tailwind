<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP-Tailwind
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
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text absolute left-[-9999px] top-0 z-50 bg-white px-4 py-2 text-blue-600 hover:bg-gray-100 focus:left-4 focus:top-4" href="#primary"><?php esc_html_e( 'Skip to content', 'wp-tailwind' ); ?></a>

	<header id="masthead" class="site-header border-b border-gray-200 bg-white shadow-sm">
		<div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
			<div class="site-branding">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title text-2xl font-bold tracking-tight text-gray-900"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title text-2xl font-bold tracking-tight text-gray-900"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$wp_tailwind_description = get_bloginfo( 'description', 'display' );
				if ( $wp_tailwind_description || is_customize_preview() ) :
					?>
					<p class="site-description mt-1 text-sm text-gray-500"><?php echo $wp_tailwind_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation hidden lg:block">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'menu_class'     => 'flex items-center gap-x-6',
						'container'      => false,
						'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'link_before'    => '<span class="text-sm font-medium text-gray-700 hover:text-blue-600 transition-colors">',
						'link_after'     => '</span>',
					)
				);
				?>
			</nav><!-- #site-navigation -->

			<button class="menu-toggle lg:hidden rounded-md p-2 text-gray-700 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500" aria-controls="primary-menu-mobile" aria-expanded="false">
				<svg class="size-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
				</svg>
			</button>
		</div>

		<!-- Mobile Menu -->
		<div id="mobile-menu" class="mobile-menu hidden border-t border-gray-200 bg-white px-4 py-4 lg:hidden">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu-mobile',
					'menu_class'     => 'flex flex-col gap-y-3',
					'container'      => false,
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'link_before'    => '<span class="block py-2 text-base font-medium text-gray-700 hover:text-blue-600">',
					'link_after'     => '</span>',
				)
			);
			?>
		</div>
	</header><!-- #masthead -->
