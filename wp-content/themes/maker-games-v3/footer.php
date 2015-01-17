<footer>
	<div class="row">
		<div class="large-3 column">
			<h6>Pages</h6>
			<?php wp_nav_menu( array('menu' => 'Footer Menu' )); ?>
		</div>
		<div class="large-3 column">
			<h6>Recent Posts</h6>
			<ul>
			<?php
				$args = array( 'numberposts' => '5' );
				$recent_posts = wp_get_recent_posts( $args );
				foreach( $recent_posts as $recent ){
					echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
				}
			?>
			</ul>
		</div>	
		<div class="large-3 column">
			<h6>Social</h6>
			<ul>
				<li><a href="#">Facebook</a></li>
				<li><a href="#">Twitter</a></li>
				<li><a href="#">Google Plus</a></li>
			</ul>
		</div>
		<div class="large-3 column">
		</div>
	</div>
	<p>Maker Games Copyright &copy; <?php echo date("Y") ?></p><p class='jstest'></p>
</footer>
<script src="<?php echo get_template_directory_uri() . '/js/foundation.min.js' ?>"></script>
<?php wp_footer(); ?>
<script>
	jQuery(document).ready(function ($) {
		$(document).foundation();
		$('.jstest').html('JavaScript works.');
	});
</script>

</body>
</html>