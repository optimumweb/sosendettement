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
			<?php get_template_part('vcard'); ?>
		</section>
		<div class="clear"></div>
		<?php wpbp_post_inside_after(); ?>
	</article>
	<?php wpbp_post_after(); ?>
<?php endwhile; // End the loop ?>