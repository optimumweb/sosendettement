<?php /* Start loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>
	<?php wpbp_post_before(); ?>
	<article id="syndic-<?php the_ID(); ?>" <?php post_class('loop'); ?>>
		<?php wpbp_post_inside_before(); ?>
		<?php if ( has_post_thumbnail() ) : ?>
			<section class="syndic-image">
				<?php the_post_thumbnail('thumbnail'); ?>
			</section>
		<?php endif; ?>
		<section class="syndic-content">
			<div class="vcard">
				<?php
					$vcard = array(
						'org'				=> get_the_title(),
						'street_address'	=> get_post_meta( get_the_ID(), 'street_address', true ),
						'street_address_2'	=> get_post_meta( get_the_ID(), 'street_address_2', true ),
						'locality'			=> get_post_meta( get_the_ID(), 'locality', true ),
						'region'			=> get_post_meta( get_the_ID(), 'region', true ),
						'postal_code'		=> get_post_meta( get_the_ID(), 'postal_code', true ),
						'country_name'		=> get_post_meta( get_the_ID(), 'country_name', true ),
						'tel'				=> get_post_meta( get_the_ID(), 'tel', true ),
						'email'				=> get_post_meta( get_the_ID(), 'email', true ),
						'url'				=> get_post_meta( get_the_ID(), 'url', true )
					);
				?>
				<h2 class="syndic-title org"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p class="adr">
					<?php echo '<span class="street-address">' . $vcard['street_address'] . '</span>' . ( $vcard['street_address_2'] ? ', <span class="street_address_2">' . $vcard['street_address_2'] . '</span>' : '' ) . ','; ?>
					<span class="locality"><?php echo $vcard['locality']; ?></span>,
					<span class="region"><?php echo $vcard['region']; ?></span> <span class="postal-code"><?php echo $vcard['postal_code']; ?></span>,
					<span class="country-name"><?php echo $vcard['country_name']; ?></span>
				</p>
				<p>
					<?php _e("Téléphone :", 'sosendettement'); ?> <span class="tel"><?php echo $vcard['tel']; ?></span>
				</p>
				<p>
					<?php _e("Courriel :", 'sosendettement'); ?> <a class="email" href="mailto:<?php echo $vcard['email']; ?>"><?php echo $vcard['email']; ?></a>
				</p>
				<p>
					<?php _e("Site Internet :", 'sosendettement'); ?> <a class="url" href=<?php echo $vcard['url']; ?>" target="_blank"><?php echo $vcard['url']; ?></a>
				</p>
			</div>
		</section>
		<div class="clear"></div>
		<?php wpbp_post_inside_after(); ?>
	</article>
	<?php wpbp_post_after(); ?>
<?php endwhile; // End the loop ?>