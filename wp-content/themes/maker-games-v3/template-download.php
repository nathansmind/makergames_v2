<?php
/*
Template Name: Download
*/
?>
<?php get_header(); ?>

<div class="row page-container">
<div id="content" class="container large-8 medium-8 columns post-list">
	<h1><?php the_title(); ?></h1>
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
		<?php the_content(); ?>

	<?php endwhile; ?>
</div><!--#content-->
	<div class="large-4 medium-4 columns">
		<?php get_sidebar(); ?>
	</div>
</div><!--Row-->
<?php get_footer(); ?>
