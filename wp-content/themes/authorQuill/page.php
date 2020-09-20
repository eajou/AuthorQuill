<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

    <?php if ( is_page('series') ): ?>
      <!-- no title -->
    <?php else: ?>
      <h1><?php the_title(); ?></h1>
    <?php endif; ?>          

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="container">
				<?php the_content(); ?>
				</div>
			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'lyla' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
