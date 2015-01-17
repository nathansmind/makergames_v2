<?php get_header(); ?>
	<div class="row page-container">
	<div id="content" class="container large-8 columns post-list">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>

			<article>
				<h1><?php the_title(); ?></h1>
				<?php if ( has_post_thumbnail() ) { /* loades the post's featured thumbnail, requires Wordpress 3.0+ */ echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; } ?>
				<div class="gallery row">
					<ul class="clearing-thumbs small-block-grid-4" data-clearing>
					  <li><a href="<?php the_field('image_1'); ?>"><img src="<?php the_field('image_1'); ?>" alt="" /></a></li>
					  <li><a href="<?php the_field('image_2'); ?>"><img src="<?php the_field('image_2'); ?>" alt="" /></a></li>
					  <li><a href="<?php the_field('image_3'); ?>"><img src="<?php the_field('image_3'); ?>" alt="" /></a></li>
					  <li><a href="<?php the_field('image_4'); ?>"><img src="<?php the_field('image_4'); ?>" alt="" /></a></li>
					</ul>				
				</div>					
				<p class="price">
					Price: <?php the_field('price'); ?>
				</p>
				<div class="post-content">
					<h4>Description</h4>
					<?php the_content(); ?>
					<?php wp_link_pages('before=<div class="pagination">&after=</div>'); ?>
				</div><!--.post-content-->
			</article>

			<div id="post-meta">
				<p>
					Categories: <?php the_category(', ') ?>
					<br />
					<?php the_tags('Tags: ', ', ', ' '); ?>
				</p>
			</div><!--#post-meta-->
		</div><!-- #post-## -->

		<div class="newer-older clear">
			<div class="older left">
				<p>
					<?php previous_post_link('%link', '&laquo; Previous post') ?>
				</p>
			</div><!--.older-->
			<div class="newer right">
				<p>
					<?php next_post_link('%link', 'Next Post &raquo;') ?>
				</p>
			</div><!--.older-->
		</div><!--.newer-older-->

		<?php comments_template( '', true ); ?>

	<?php endwhile; /* end loop */ ?>
</div><!--#content-->
	<div class="large-4 columns">
		<?php get_sidebar( 'printers' ); ?>
	</div>
</div><!--Row-->
<?php get_footer(); ?>
