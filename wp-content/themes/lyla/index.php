<?php get_header(); ?>

	<main role="main">

	<h1>Index</h1>
	
		<!-- section -->
		<section>

			<h1><?php _e( 'Latest Posts', 'lyla' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
