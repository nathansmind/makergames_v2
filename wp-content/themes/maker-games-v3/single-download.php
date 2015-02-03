<?php get_header(); ?>
<div class="row page-container">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<div class="large-4 medium-4 columns download-title right">
		<h1><?php the_title(); ?></h1>
		<p><?php echo get_field('game_name'); ?></p>
	</div>

	<div class="container large-8 medium-8 columns post-list left download-image">
		<?php if ( has_post_thumbnail() ) { /* loades the post's featured thumbnail, requires Wordpress 3.0+ */ echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; } ?>
		<div class="model">
		<?php 
			$modleURL = '[kento_3dmv width="400px" height="400px" source="' . get_field('stl_file') . '" ]';
			echo do_shortcode( $modleURL ); ?>
		</div>
		<a href="#" id="js-view-btn" class="button radius secondary view-btn js-view-btn">3D View</a>
	</div>
	
	<div class="large-4 medium-4 columns download-content right">
		<a href="<?php echo get_field('download_url'); ?>" download class="button radius expand">Download</a> 
		<?php the_content(); ?>
	</div>

	<div id="content" class="container large-8 medium-8 columns post-list left">
		<div class="newer-older clear">
			<div class="older left">
				<p><?php previous_post_link('%link', '&laquo; Previous Download') ?></p>
			</div>
			<div class="newer right">
				<p><?php next_post_link('%link', 'Next Download &raquo;') ?></p>
			</div>
		</div>
	</div><!--#content-->
	
	<?php endwhile; /* end loop */ ?>
</div><!--Row-->
<?php get_footer(); ?>
