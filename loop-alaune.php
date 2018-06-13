<?php
/**
 * Just displays a post loop. Intended to be included in child themes using get_template_part('loop'). Also works with SiteOrigin page builder loop widget.
 *
 * Loop Name: A la Une Loop
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

			<?php
			$monUrl =  get_the_post_thumbnail( get_the_ID(),  array(200,200), array('class'=>'img-fluid') );
			
			?>
		<a href='<?=get_post_permalink(); ?>'>
			<div class="presentation-text alaune" style='text-align: center;display:flex;flex-direction: column; justify-content: space-around; '>
				<?php echo $monUrl; ?>
				<div class="overlay">
					<div class="content-equipe">
						<span class='title'><?= get_the_title(); ?></span>
						<hr class="ligne" />
						<span><?= get_field('Function'); ?></span>
					</div>
				</div>
			</div>
		</a>

	<?php endwhile; ?>
	</div>
<?php endif ?>
