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
				<?php else : ?>
					<br />
				<?php endif; ?>
			</div>
			<div class="grid_5 omega">
				<header class="post-header">
					<h2 class="post-title">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h2>
					<section class="post-meta">
						<span class="post-author byline author vcard"><?php _e('Rédigé par', 'sosendettement'); ?> <?php the_author_posts_link(); ?></span>
						<time class="post-date updated" datetime="<?php the_time('c'); ?>" pubdate><?php printf(__('le %s', 'sosendettement'), get_the_time(__('l, F jS, Y', 'wpbp'))); ?></time>
					</section>
				</header>
				<section class="post-content">
					<?php if (is_archive() || is_search()) : ?>
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
