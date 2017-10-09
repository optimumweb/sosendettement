<?php if ( function_exists('of_get_option') && of_get_option('map') ) : ?>
	<section id="map">
		<div class="container fluid">
			<div id="map-title">
				<div class="title1"><?php _e("Trouvez de l'aide près de chez vous!", 'sosendettement'); ?></div>
				<div class="title2"><?php _e("Carte de syndics autorisés en insolvabilité au Québec", 'sosendettement'); ?></div>
			</div>
			<iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo of_get_option('map'); ?>"></iframe>
		</div>
	</section>
<?php endif; ?>
