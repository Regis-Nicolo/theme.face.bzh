
	</div>
	<footer class='main-footer'>
		<!--Logo de Face -->
		<div class="logo">

	 		<img src="<?php echo get_stylesheet_directory_uri(); ?>/css/assets/images/logo-white.svg">
		</div>
		<!--Coordonnées-->
		<div class="adresse">
			

	  		<p>
	  			<i class="fa fa-home padr1" aria-hidden="true"></i>23 rue d'Aiguillon 35200 Rennes<br>
		    	<i class="fas fa-phone padr1" aria-hidden="true"></i> 02 99 86 89 26 <br>
		    	<i class="fa fa-desktop padr1" aria-hidden="true"></i> <a href='<?= bloginfo('url'); ?>'><?= bloginfo('url'); ?></a> <br>

		    <span class="fa-stack fa-1x">
  				<i class="fa fa-circle fa-stack-2x icon-background"></i>
  				<i class="fab fa-twitter fa-stack-1x icon-logo"></i>
			</span>
			<span class="fa-stack fa-1x">
  				<i class="fa fa-circle fa-stack-2x icon-background"></i>
  				<i class="fab fa-facebook fa-stack-1x icon-logo"></i>
			</span>
			<span class="fa-stack fa-1x">
  				<i class="fa fa-circle fa-stack-2x icon-background"></i>
  				<i class="fas fa-envelope fa-stack-1x icon-logo"></i>
			</span>
	  		 
        </div>
	</footer>
	<? php wp_footer();?>
	</body>
</html>