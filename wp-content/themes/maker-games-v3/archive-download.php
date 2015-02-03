<?php get_header(); ?>
	<div class="row page-container">
	<div id="content" class="container large-12 columns">
		<h1>Downloads</h1>
        <?php $args = array( 'post_type' => 'download', 'posts_per_page' => 100, 'orderby' => 'strategic-brief' ); ?>
		<?php $loop = new WP_Query( $args ); ?>
		<ul class="small-block-grid-1 medium-block-grid-3 large-block-grid-3">
	<?php if (have_posts('compare')) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
		
		<li class="download-tile">
			<div>
				<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark">
					<?php if ( has_post_thumbnail() ) { the_post_thumbnail('printer-feed'); } ?>
				</a>
				<div class="postInfo">
					<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark">
						<h4 class="name"><?php the_title(); ?></h4>
						<h4 class="game"><?php echo get_field('game_name'); ?></h4>
					</a>
				</div><!--.postInfo-->
			</div><!-- End Printer Tile -->
		</li><!--.post-single-->
		
	<?php endwhile; else: ?>
		<div class="no-results">
			<h2>No Results</h2>
			<p>Please feel free try again!</p>
		</div><!--no-results-->
	<?php endif; ?>
	
		<li class="download-tile coming-soon">
			<div>
				<h4>Feature your work!</h4>
				<p>Send us an email to learn how.</p> 
				<a href="http://makergames.net/volunteer/" class="button radius">Contact Us</a>
			</div>
		</li><!--.post-single-->
	
		</ul>

	</div><!--#content-->
</div><!--Row-->
<?php get_footer(); ?>
