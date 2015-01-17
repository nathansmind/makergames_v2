<?php
/*
Template Name: Join
*/
?>


<?php get_header(); ?>

<div class="row page-container">

<?php while (have_posts()) : the_post(); ?>
	<div class="large-6 large-centered columns">
		<h2 class="page-header"><?php the_title(); ?></h2>
		<p>Receive all the latest news updates you could possibly want form Maker Games. If that doesn't get you excited enough, be sure to <a href="http://makergames.net/volunteer/">volunteer!</a> We are always looking for people to help grow our community.</p>

		<div class="page-content">
			<?php the_content(__('Read more'));?>
		</div>
<?php endwhile; ?>

		<?php echo do_shortcode("[contact-form-7 id='27' title='Join Form']") ?>
<!-- 		<?php echo do_shortcode("[subscribe2]") ?> -->
		
		
	</div>
</div>


<?php get_footer(); ?>