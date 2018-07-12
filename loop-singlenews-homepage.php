<?php
/**
 * Just displays a post loop. Intended to be included in child themes using get_template_part('loop'). Also works with SiteOrigin page builder loop widget.
 *
 * Loop Name: Loop  Latest News on Home page
 *
 * @package vantage
 * @since vantage 1.0
 * @license GPL 2.0
 */
?>
<?php if ( have_posts() ) : ?>

	<?php /* Start the Loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<div class='single-loop row  white-div'>
			<div class='content col-lg-9'>
				<?php the_excerpt(); ?>
				<a class='nounderline' href='<?php the_permalink(); ?>'><div class='btn-plus'>Voir plus ></div></a>

			</div>
			<div class='thumbnail col-lg-3'>
				<?php the_post_thumbnail('thumbnail');?>
			</div>
		</div>

	<?php endwhile; ?>

<?php endif; ?>
