<section id="banner">
	<div class="topline"></div>
	<div class="container <?php wpbp_option('container_class'); ?>">
		<div class="grid_12">
			<section id="banner-content">
				<div class="container">
					<div class="title1"><?php _e("Au bout du rouleau?", 'sosendettement'); ?></div>
					<?php if ( is_front_page() ) : ?>
						<div class="title3"><?php _e("Vos dettes sont-elles la source de :", 'sosendettement'); ?></div>
						<ul>
							<li><?php _e("Troubles du sommeil?", 'sosendettement'); ?></li>
							<li><?php _e("Problèmes de santé?", 'sosendettement'); ?></li>
							<li><?php _e("Conflits avec la famille?", 'sosendettement'); ?></li>
						</ul>
						<div class="title2"><?php _e("Vous pouvez vous en sortir!", 'sosendettement'); ?></div>
					<?php endif; ?>
					<div><a class="button red xlarge arrow scroll-to" href="/contactez-nous/"><?php _e("Obtenez de l'aide", 'sosendettement'); ?></a></div>
				</div>
			</section>
			<section id="banner-tel-cta">
				<div class="container">
					<div class="cta"><?php _e("Parlez confidentiellement avec un conseiller", 'sosendettement'); ?></div>
					<div class="tel"><?php _e("Sans frais :", 'sosendettement'); ?> <strong><?php echo of_get_option('tel'); ?></strong></div>
				</div>
			</section>
		</div>
	</div>
</section>
