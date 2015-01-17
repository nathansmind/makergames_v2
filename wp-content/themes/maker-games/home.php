<?php get_header(); ?>
	<div class="row page-container">
	<div id="content" class="container large-8 columns">
		
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<div class="post-single row">
<!-- 			<?php if ( has_post_thumbnail() ) { /* loades the post's featured thumbnail, requires Wordpress 3.0+ */ echo '<div class="featured-thumbnail large-12 column">'; the_post_thumbnail(); echo '</div>'; } ?> -->
			<div class="postInfo large-12 column">
				<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				<p class="date"><?php the_time('F j, Y'); ?></p>
				<div class="post-excerpt">
					<?php the_excerpt(); /* the excerpt is loaded to help avoid duplicate content issues */ ?>
				</div><!--.post-excerpt-->
				<div class="post-meta">
					<p>
						Categories: <?php the_category(', ') ?>
						<br />
						<?php if (the_tags('Tags: ', ', ', ' ')); ?>
					</p>
				</div><!--.postMeta-->
			</div><!--.postInfo-->
		</div><!--.post-single-->
		
	<?php endwhile; else: ?>
		<div class="no-results">
			<h2>No Results</h2>
			<p>Please feel free try again!</p>
			<?php get_search_form(); /* outputs the default Wordpress search form */ ?>
		</div><!--no-results-->
	<?php endif; ?>
		
		<div class="oldernewer">
			<div class="older">
				<p>
					<?php next_posts_link('&laquo; Older Entries') ?>
				</p>
			</div><!--.older-->
			<div class="newer">
				<p>
					<?php previous_posts_link('Newer Entries &raquo;') ?>
				</p>
			</div><!--.older-->
		</div><!--.oldernewer-->

	</div><!--#content-->

	<div class="large-4 columns">
		<?php get_sidebar(); ?>
	</div>
</div><!--Row-->
<?php get_footer(); ?>
