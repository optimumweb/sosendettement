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
		
		<?php if ( is_front_page() ) : ?>
			<?php get_template_part('banner'); ?>
			<?php get_template_part('value-bar'); ?>
		<?php endif; ?>
