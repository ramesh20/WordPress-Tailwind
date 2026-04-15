<?php
/**
 * Template Name: Flexible
 * Template Post Type: post, page, product
 *
 * @package WP-Tailwind
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', get_post_type() );
		endwhile;
		wp_reset_postdata();
		?>
	</main><!-- #main -->

<?php
get_footer();