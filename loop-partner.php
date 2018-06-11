<?php
/**
 * Just displays a post loop. Intended to be included in child themes using get_template_part('loop'). Also works with SiteOrigin page builder loop widget.
 *
 * Loop Name: Partner Loop
 *
 * @package vantage
 * @since vantage 1.0
 * @license GPL 2.0
 */
?>
<?php if ( have_posts() ) : ?>

	<div class="presentation row">
	<?php /* Start the Loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<a href='<?= get_field('url'); ?>'>
			<?php
			$monUrl =  get_the_post_thumbnail( get_the_ID(),  array(200,200), array('class'=>'img-fluid') );
			
			?>

			<div class="presentation-text team col-md-2" style='text-align: center;display:flex;flex-direction: column; justify-content: space-around; '>
				<?php echo $monUrl; ?>
				<div class="overlay">
					<div class="content-equipe">
						<span><?= get_the_title(); ?></span>
						<hr class="ligne" />
						
					</div>
				</div>
			</div>
		</a>

	<?php endwhile; ?>
	</div>
<?php endif ?>
