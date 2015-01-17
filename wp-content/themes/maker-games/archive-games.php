<?php get_header(); ?>
	<div class="row page-container">
	<div id="content" class="container large-12 columns">
		<h2>Game Reviews</h2>
        <?php $args = array( 'post_type' => 'games', 'posts_per_page' => 8, 'orderby' => 'strategic-brief' ); ?>
		<?php $loop = new WP_Query( $args ); ?>
		<ul class="small-block-grid-1 medium-block-grid-3 large-block-grid-3">
	<?php if (have_posts('compare')) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
		
		<li class="printer-single">
			<div class="printer-tile large-12 column">
				<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark">
					<?php if ( has_post_thumbnail() ) { the_post_thumbnail('printer-feed'); } ?>
				</a>
				<div class="postInfo">
					<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark">
						<h4><?php the_title(); ?></h4>
						<div class="post-excerpt">
							<?php the_excerpt(); ?>
						</div>
					</a>
				</div><!--.postInfo-->
			</div><!-- End Printer Tile -->
		</li><!--.post-single-->
		
	<?php endwhile; else: ?>
		<div class="no-results">
			<h2>No Results</h2>
			<p>Please feel free try again!</p>
			<?php get_search_form(); /* outputs the default Wordpress search form */ ?>
		</div><!--no-results-->
	<?php endif; ?>
		</ul>
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
</div><!--Row-->
<?php get_footer(); ?>
