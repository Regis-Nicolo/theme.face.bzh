<?php
/*
Template Name: Page d'archives
*/
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class='row single'>
        <div class='col-lg-8 presentation-text'>
            <h3><?php the_title() ?></h3>
            <hr class='ligne'>
            <div style='text-align:center'>
            <?php the_post_thumbnail(); ?>
            <?php the_content(); ?>
            </div>
            <div class='footer'>
               
                <?php
                    $prev_post = get_previous_post( TRUE );
                    if (!empty( $prev_post ))
                        echo "<div class='btn-dark previous' ><a href='", esc_url( get_permalink( $prev_post->ID ) ), "'>", "Précédent" , "</a></div>";
                ?>
                <?php
                    $next_post = get_next_post( TRUE );
                    if (!empty( $next_post ))
                        echo "<div class='btn-dark next' ><a href='", esc_url( get_permalink( $next_post->ID ) ), "'>", "Suivant", "</a></div>";
                ?>
                <!-- <div class='btn-dark previous'><?php next_post_link(); ?></div> -->
            </div>
            
            
        </div>
        <div class='col-lg-3 offset-lg-1 presentation-text'>
            
        </div>

    </div>
<?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>           
<?php get_footer(); ?>