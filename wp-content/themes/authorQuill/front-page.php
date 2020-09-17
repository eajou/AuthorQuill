<?php /* Template Name: Home */ ?>
<?php get_header(); ?>

<section class="container content">
    <div class="inner">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    </div>
</section>

<?php 
    $posts = get_posts(array(
        'posts_per_page'    => -1,
        'post_type'         => 'book'
    ));

    if( $posts ): ?>   
    
        <?php foreach( $posts as $post ): 
            setup_postdata( $post );
            ?>   

            <?php if ( get_field( 'featured' ) ): ?>
                <section class="damask">
                    <div class="container main">
                        <div class="release-section">

                        <div class="release">
                            <img src="<?php the_post_thumbnail_url(); ?>" />
                        </div>
                        
                        <div class="inner">
                            <h5 class="hide-mobile">
                                <strong><?php the_field('series'); ?>:</strong> <?php the_title(); ?><br />

                                <?php if ( get_field('release_date') ): ?>
                                    <strong>Release Date:</strong> <?php the_field('release_date'); ?>
                                <?php endif; ?>                                
                            </h5>

                            <?php the_excerpt(); ?>

                            <span class="read">
                                <a href="books#<?php the_title(); ?>">
                                    Read More <i class="fas fa-arrow-right"></i>
                                </a>
                            </span>
                        </div>

                        </div>
                    </div>
                </section>
            <?php endif;  ?> 
        <?php endforeach; ?>     
        
    <?php wp_reset_postdata(); ?>
<?php endif; ?>          

<?php get_footer(); ?>