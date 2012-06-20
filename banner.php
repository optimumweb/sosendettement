<section id="banner">
	<div class="topline"></div>
	<div class="container <?php wpbp_option('container_class'); ?>">
		<div class="grid_5">
			<section id="banner-content">
				<div class="title1"><?php _e("Au bout du rouleau?", 'sosendettement'); ?></div>
				<div class="title3"><?php _e("Vos dettes sont-elles la source de :", 'sosendettement'); ?></div>
				<ul>
					<li><?php _e("Troubles du sommeil?", 'sosendettement'); ?></li>
					<li><?php _e("Problèmes de santé?", 'sosendettement'); ?></li>
					<li><?php _e("Conflits avec la famille?", 'sosendettement'); ?></li>
				</ul>
				<div class="title2"><?php _e("Vous pouvez vous en sortir!", 'sosendettement'); ?></div>
				<div><a class="button red large arrow" href="#"><?php _e("Consultez un professionnel", 'sosendettement'); ?></a></div>
			</section>
		</div>
		<div class="grid_7">
			<section id="banner-image">
				<?php wpbp_image_tag(array(
					'src' => THEME_URI . '/img/banner_image_1.jpg',
					'width' => 540,
					'height' => 360,
					'alt' => __("Solutions aux dettes et à l'endettement", 'sosendettement')
				)); ?>
			</section>
		</div>
	</div>
</section>