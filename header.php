<?php get_template_part('head'); ?>

	<?php wpbp_wrap_before(); ?>
	<div id="wrap" role="document">
		<?php wpbp_header_before(); ?>
		<header id="header" role="banner">
			<?php wpbp_header_inside_before(); ?>
            <div class="container <?php wpbp_option('container_class'); ?>">
            	<div class="grid_3">
					<section id="site-title">
						<a id="logo" href="<?php echo home_url(); ?>/" class="same-height-as" data-ref="#main-nav"><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></a>
					</section>
			    </div>
			    <div class="grid_9">
					<nav id="main-nav" role="navigation">
						<div class="container">
							<?php wp_nav_menu( array( 'theme_location' => 'primary_navigation', 'walker' => new Description_Walker() ) ); ?>
							<div class="clear"></div>
						</div>
					</nav>
			    </div>
            </div>
            <?php wpbp_header_inside_after(); ?>
		</header>
		<?php wpbp_header_after(); ?>
		
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
						<div><a class="button red arrow" href="#"><?php _e("Consultez un professionnel", 'sosendettement'); ?></a></div>
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