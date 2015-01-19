<?php
/*
Template Name: Volunteer
*/
?>


<?php get_header(); ?>

<div class="row page-container">
<?php while (have_posts()) : the_post(); ?>
	<div id="content" class="large-6 large-centered columns">
		<h2 class="page-header"><?php the_title(); ?></h2>
		<p>We are looking for talented game makers, 3D digital artists, and writers that want to share their talents to create an amazing game making community. Shoot us an email and let us know how you want to help.</p>
		<div class="page-content">
			<?php the_content(__('Read more'));?>
		</div>
<?php endwhile; ?>
		<?php echo do_shortcode("[contact-form-7 id='32' title='Volunteer']") ?>
	</div>
</div>


<?php get_footer(); ?>