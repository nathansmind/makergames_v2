<footer>
	<div class="row">
		<div class="large-3  medium-3 column">
			<h6>Pages</h6>
			<?php wp_nav_menu( array('menu' => 'Footer Menu' )); ?>
		</div>
		<div class="large-3 medium-3 column">
			<h6>Recent Posts</h6>
			<ul>
			<?php
				$args = array( 'numberposts' => '4' );
				$recent_posts = wp_get_recent_posts( $args );
				foreach( $recent_posts as $recent ){
					echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
				}
			?>
			</ul>
		</div>	
		<div class="large-3 medium-3 column">
			<h6>Social</h6>
			<ul>
				<li><a href="http://www.thingiverse.com/groups/maker-games">Thingiverse Group</a></li>
				<li><a href="https://www.facebook.com/MakerGames3d">Facebook</a></li>
				<li><a href="www.twitter.com/nathans_mind">Twitter</a></li>
			</ul>
		</div>
		<div class="large-3 medium-3 column">
		</div>
	</div>
	<p>Maker Games Copyright &copy; <?php echo date("Y") ?></p><p class='jstest'></p>
</footer>
<?php wp_footer(); ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri()."/js/foundation.min.js" ?>"></script>
<script>
	jQuery(document).ready(function ($) {
		$(document).foundation();		
	});
</script>

</body>
</html>