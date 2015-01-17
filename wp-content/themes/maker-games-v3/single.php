<?php get_header(); ?>
<div class="row page-container">
	<div id="content" class="container large-8 medium-8 columns post-list">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
			<article>
				<?php if ( has_post_thumbnail() ) { /* loades the post's featured thumbnail, requires Wordpress 3.0+ */ echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; } ?>
				<h1><?php the_title(); ?></h1>
				<p class="post-date date">
					<?php the_time('F j, Y'); ?>
				</p>
				<div class="post-content">
					<?php the_content(); ?>
					<?php wp_link_pages('before=<div class="pagination">&after=</div>'); ?>
				</div><!--.post-content-->
			</article>
		</div><!-- #post-## -->

		<div class="newer-older clear">
			<div class="older left">
				<p>
					<?php previous_post_link('%link', '&laquo; Previous post') ?>
				</p>
			</div>
			<div class="newer right">
				<p>
					<?php next_post_link('%link', 'Next Post &raquo;') ?>
				</p>
			</div>
		</div>
		
		<hr>
		<?php comments_template( '', true ); ?>

	<?php endwhile; /* end loop */ ?>
	</div><!--#content-->
	<div class="large-4 medium-4 columns">
		<?php
		if ( 'download' == get_post_type() ) {
		    get_sidebar();
		} else {
		    get_sidebar();
		}		
		  ?>		
	</div>
</div><!--Row-->
<?php get_footer(); ?>
