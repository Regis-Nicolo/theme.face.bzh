<?php
/*
Template Name: Page d'archives
*/
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class='row'>
        <div class='col-lg-8 presentation-text'>
            <h3><?php the_title() ?></h3>
            <hr class='ligne'>
            <div style='text-align:center'>
            <?php the_post_thumbnail(); ?>
            <?php the_content(); ?>
            </div>
            <div
                <?php previous_post_link(); ?>
                <?php next_post_link(); ?>
            </div>
            
            
        </div>
        <div class='col-lg-3 offset-lg-1 presentation-text'>
            
        </div>

    </div>
<?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>           
<?php get_footer(); ?>