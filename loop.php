<?php /* If there are no posts to display, such as an empty archive page */ ?>
<?php if ( !have_posts() ) : ?>
	<div class="notice">
		<p class="bottom"><?php _e('Sorry, no results were found.', 'wpbp'); ?></p>
	</div>
	<?php get_search_form(); ?>	
<?php endif; ?>

<?php /* Start loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>
	<?php wpbp_post_before(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php wpbp_post_inside_before(); ?>
		<div class="container <?php wpbp_option('container_class'); ?>">
			<div class="grid_3 alpha">
				<?php if ( has_post_thumbnail() ) : ?>
					<section class="post-thumbnail">
						<?php the_post_thumbnail('thumbnail'); ?>
					</section>
				<?php endif; ?>&nbsp;
			</div>
			<div class="grid_5 omega">
				<header class="post-header">
					<h2 class="post-title">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h2>
					<section class="post-meta">
						<time class="post-date updated" datetime="<?php the_time('c'); ?>" pubdate><?php printf(__('Posted on %s at %s', 'wpbp'), get_the_time(__('l, F jS, Y', 'wpbp')), get_the_time()); ?></time>
					</section>
				</header>
				<section class="post-content">
					<?php if (is_archive() || is_search()) : // Only display excerpts for archives and search ?>
						<?php the_excerpt(); ?>
					<?php else : ?>
						<?php the_content( __("Lire la suite", 'sosendettement') ); ?>
					<?php endif; ?>
				</section>
				<footer class="post-footer">
					<p class="post-tags"><?php the_tags(); ?></p>
				</footer>
				<div class="clear"></div>
			</div>
		</div>
		<?php wpbp_post_inside_after(); ?>
	</article>
	<hr />
	<?php wpbp_post_after(); ?>
<?php endwhile; // End the loop ?>
