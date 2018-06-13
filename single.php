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
            <div>

                <div style='text-align: center'>
                    <?php the_post_thumbnail('medium', ['class' => 'img-responsive responsive--full']); ?>
                </div>
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
        <div class='col-lg-3 offset-lg-1 presentation-text aside'>
            <?php
                // Default arguments
                $args = array(
                    'posts_per_page' => 4, // How many items to display
                    'post__not_in'   => array( get_the_ID() ), // Exclude current post
                    'no_found_rows'  => true, // We don't ned pagination so this speeds up the query
                );

                // Check for current post category and add tax_query to the query arguments
                $cats = wp_get_post_terms( get_the_ID(), 'category' ); 
                $cats_ids = array();  
                foreach( $cats as $wpex_related_cat ) {
                    $cats_ids[] = $wpex_related_cat->term_id; 
                }
                if ( ! empty( $cats_ids ) ) {
                    $args['category__in'] = $cats_ids;
                }

                // Query posts
                $wpex_query = new wp_query( $args );

                // Loop through posts
                foreach( $wpex_query->posts as $post ) : setup_postdata( $post ); ?>
                    <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>">
                        <div class='block'>
                            
                            <?php the_post_thumbnail('thumbnail', ['class' => 'img-responsive responsive--full']); ?>
                            <div class='block-title'>
                             <?php the_title(); ?>
                            </div>

                        </div>
                    </a>

                <?php
                // End loop
                endforeach;

                // Reset post data
                wp_reset_postdata(); ?>
        </div>

    </div>
<?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>           
<?php get_footer(); ?>