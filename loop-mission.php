<?php
/**
 * Just displays a post loop. Intended to be included in child themes using get_template_part('loop'). Also works with SiteOrigin page builder loop widget.
 *
 * Loop Name: Mission Loop
 *
 * @package vantage
 * @since vantage 1.0
 * @license GPL 2.0
 */
?>

<?php

	global $wp_query;
	$limite = $wp_query->post_count/2;
	$nouveau_div = true;
	$compteur = 0;
	$newblock=false;
?>
<div class='presentation row'>
<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php
					$compteur += 1;
					if($compteur >= $limite && !$newblock ){
						echo "</div>";
						$nouveau_div=true;
						$newblock=true;
					}
					if($nouveau_div){
						
						echo "<div class='mission presentation-text col-md-6'>";
						$nouveau_div=false;
						
					}
				?>
				<h4><?php the_title(); ?></h4>
				<hr class="ligne" />
				<p>
					<?php the_content(); ?>
				</p>
			<?php endwhile; ?>
		
</div>

<?php endif ?>
</div>