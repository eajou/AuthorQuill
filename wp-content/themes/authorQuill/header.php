<!doctype html>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

      <?php if ( is_page('book') ): ?>
        <!-- Hide the Header -->
          IS BOOK PAGE
      <?php else: ?>
        
        <!-- Show the Header -->
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="hero" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">

          <h2>test</h2>
    
          <!-- header -->
          <header class="header clear" role="banner">

            <!-- nav -->
            <nav class="nav" role="navigation">
              <?php lyla_nav(); ?>
            </nav>
            <!-- /nav -->

          </header>
          <!-- /header -->
    
        </div>
      <?php endwhile; ?>
      <?php endif; ?>  