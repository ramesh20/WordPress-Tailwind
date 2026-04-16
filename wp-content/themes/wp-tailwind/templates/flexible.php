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
			?>

			<!-- Page Header -->
			<section class="border-b border-gray-200 bg-gray-50 py-16">
				<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
					<h1 class="text-4xl font-bold tracking-tight text-gray-900">
						<?php the_title(); ?>
					</h1>
					<?php if ( get_the_excerpt() ) : ?>
						<p class="mt-4 text-lg text-gray-600">
							<?php echo esc_html( get_the_excerpt() ); ?>
						</p>
					<?php endif; ?>
				</div>
			</section>

			<!-- Two-Column Section: Text Left / Content Right -->
			<section class="py-16">
				<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
					<div class="grid grid-cols-1 gap-12 lg:grid-cols-2 lg:gap-16">

						<!-- Left Column: Static Text -->
						<div class="flex flex-col justify-center">
							<h2 class="text-3xl font-bold tracking-tight text-gray-900">
								<?php esc_html_e( 'About This Page', 'wp-tailwind' ); ?>
							</h2>
							<p class="mt-4 text-base leading-7 text-gray-600">
								<?php esc_html_e( 'This is a flexible template that you can customize with your own content. The left column contains static text, while the right column displays dynamic content or images.', 'wp-tailwind' ); ?>
							</p>
							<ul class="mt-8 space-y-4">
								<li class="flex items-start gap-x-3">
									<svg class="size-6 shrink-0 text-green-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
										<path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
									</svg>
									<span class="text-gray-700"><?php esc_html_e( 'Fully customizable with Tailwind CSS', 'wp-tailwind' ); ?></span>
								</li>
								<li class="flex items-start gap-x-3">
									<svg class="size-6 shrink-0 text-green-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
										<path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
									</svg>
									<span class="text-gray-700"><?php esc_html_e( 'Responsive two-column layout', 'wp-tailwind' ); ?></span>
								</li>
								<li class="flex items-start gap-x-3">
									<svg class="size-6 shrink-0 text-green-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
										<path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
									</svg>
									<span class="text-gray-700"><?php esc_html_e( 'Easy to extend and modify', 'wp-tailwind' ); ?></span>
								</li>
							</ul>
						</div>

						<!-- Right Column: Placeholder Image + Content -->
						<div class="flex flex-col items-center">
							<div class="w-full overflow-hidden rounded-2xl bg-gray-100 shadow-lg">
								<img
									class="w-full"
									src="https://placehold.co/800x500/e2e8f0/475569?text=Your+Image+Here"
									alt="<?php esc_attr_e( 'Placeholder image', 'wp-tailwind' ); ?>"
								/>
							</div>
							<div class="mt-6 w-full rounded-xl bg-white p-6 shadow outline outline-gray-200">
								<h3 class="text-xl font-semibold text-gray-900">
									<?php esc_html_e( 'Dynamic Content Block', 'wp-tailwind' ); ?>
								</h3>
								<p class="mt-2 text-gray-600">
									<?php esc_html_e( 'Replace this placeholder content with your own. You can add text, images, or any other WordPress content here.', 'wp-tailwind' ); ?>
								</p>
								<a href="#" class="mt-4 inline-block rounded-lg bg-blue-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">
									<?php esc_html_e( 'Learn More', 'wp-tailwind' ); ?>
								</a>
							</div>
						</div>

					</div>
				</div>
			</section>
			

			<!-- Post Content (if any) -->
			<?php
			get_template_part( 'template-parts/content', get_post_type() );
			?>

		<?php
		endwhile;
		wp_reset_postdata();
		?>
	</main><!-- #main -->

	<div class="mx-auto max-w-7xl mt-8 gap-x-4 flex flex-row">
	<div class="basis-64 p-4 bg-pink-300 hover:bg-pink-500 rounded">01</div>
	<div class="basis-64 p-4 bg-pink-300 hover:bg-pink-500 rounded">02</div>
	<div class="basis-128 p-4 bg-pink-300 hover:bg-pink-500 rounded">03</div>
	</div>50"
	

<?php
get_footer();
