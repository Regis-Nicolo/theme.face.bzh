<?php
/**
 * Just displays a post loop. Intended to be included in child themes using get_template_part('loop'). Also works with SiteOrigin page builder loop widget.
 *
 * Loop Name: Actu Loop
 *
 * @package vantage
 * @since vantage 1.0
 * @license GPL 2.0
 */
?>

<?php if ( have_posts() ) : ?>
		<div id="my-slider" class="carousel slide" data-ride="carousel">

			<div class="carousel-inner" role="listbox">
			<?php $first=true; ?>
			
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="carousel-item <?php if($first){ echo 'active';$first=false; } ?>"> 

				<?php the_post_thumbnail(); ?>
				
				<?php the_content(); ?>
				</div>

				

			<?php endwhile; ?>
			</div>
		</div>

<?php endif ?>
