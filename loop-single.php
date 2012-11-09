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
			<section class="post-image">
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
		<section class="post-author">
		  <div class="section-widget">
		    <div class="container">
		      <span class="type"><?php _e("Auteur", 'sosendettement'); ?></span>
		      <div class="clear"></div>
		      <div class="post-author-photo">
						<?php wpbp_image_tag( array(
							'src'		=> get_the_author_meta('photo'),
							'alt'		=> get_the_author_meta('display_name'),
							'width'		=> 150,
							'height'	=> 150
						) ); ?>
					</div>
          <h3 class="widget-title post-author-name"><?php the_author(); ?></h3>
          <?php echo wpautop( get_the_author_meta('description') ); ?>
          <ul class="post-author-links">
            <?php if ( get_the_author_meta('googleplus') ) : ?>
              <li class="social-icon vector x24 google-plus">
                <a href="<?php the_author_meta('googleplus'); ?>?rel=author" target="blank"><?php printf(__("%s Google+ Profile", 'pierreroy'), get_the_author_meta('display_name')); ?></a>
              </li>
            <?php endif; ?>
            <?php if ( get_the_author_meta('twitter') ) : ?>
              <li class="social-icon vector x24 twitter">
                <a href="http://twitter.com/<?php the_author_meta('twitter'); ?>" target="blank"><?php printf(__("%s Twitter Profile", 'pierreroy'), get_the_author_meta('display_name')); ?></a>
              </li>
            <?php endif; ?>
          </ul>
          <div class="clear"></div>
        </div>
      </div>
			<div class="clear"></div>
		</section>
		<div class="clear"></div>
		<?php wpbp_post_inside_after(); ?>
	</article>
	<?php wpbp_post_after(); ?>
<?php endwhile; // End the loop ?>