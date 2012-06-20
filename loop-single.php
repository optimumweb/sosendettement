<?php /* Start loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>
	<?php wpbp_post_before(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php wpbp_post_inside_before(); ?>
		<header class="post-header">
			<h1 class="post-title">
				<?php the_title(); ?>
			</h1>
			<section class="post-meta">
				<span class="post-author byline author vcard"><?php _e('Rédigé par', 'sosendettement'); ?> <?php the_author_posts_link(); ?></span>
				<time class="post-date updated" datetime="<?php the_time('c'); ?>" pubdate><?php printf(__('le %s', 'sosendettement'), get_the_time(__('l, F jS, Y', 'wpbp'))); ?></time>
			</section>
		</header>
		<?php if ( has_post_thumbnail() ) : ?>
			<section class="post-thumbnail">
				<?php the_post_thumbnail('medium'); ?>
			</section>
		<?php endif; ?>
		<section class="post-content">
			<?php the_content(); ?>
		</section>
		<footer class="post-footer">
			<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'wpbp'), 'after' => '</p></nav>' )); ?>
			<p class="post-tags"><?php the_tags(); ?></p>
		</footer>
		<div class="clear"></div>
		<?php wpbp_post_inside_after(); ?>
	</article>
	<?php wpbp_post_after(); ?>
<?php endwhile; // End the loop ?>