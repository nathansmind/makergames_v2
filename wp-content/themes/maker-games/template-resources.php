<?php
/*
Template Name: Resources
*/
?>

<?php get_header(); ?>
	<div class="row page-container">
	<div id="content" class="container large-12 columns">
		<h2><?php the_title() ?></h2>
		<ul class="small-block-grid-1 medium-block-grid-3 large-block-grid-4">
		
			<li class="resource-link">
				<a class="printer-tile large-12 column" href="http://makergames.net/3dprinters/" rel="bookmark">
					<img class="resource-icon large-12 column" src="<?php bloginfo('template_url'); ?>/images/printer-icon.svg">
					3D Printer Guide
				</a>
			</li><!--.post-single-->
			<li class="resource-link">
				<a class="printer-tile large-12 column" href="http://makergames.net/resource-library/3d-print-material-guide/" rel="bookmark">
					<img class="resource-icon large-12 column" src="<?php bloginfo('template_url'); ?>/images/filament-icon.svg">
					3D materials Guide
				</a>
			</li><!--.post-single-->

		</ul>

	</div><!--#content-->
</div><!--Row-->
<?php get_footer(); ?>
