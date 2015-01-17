<div id="sidebar">
	<?php if ( ! dynamic_sidebar( 'printers' )) : ?>

		<ul class="widget">
			<form class="row search-form" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">  
			  <div class="row collapse">
			    <div class="small-10 columns">
			      <input class="left" type="text" name="s" id="searchinput" placeholder="Search Posts" />
			    </div>
			    <div class="small-2 columns">
			      <input  class="button right postfix" type="submit" id="searchsubmit" value="Go" />
			    </div>
			  </div>
			</form>
		</ul>

		<li class="widget">
			<h3>More 3D Printers</h3>
			<ul>
				<li><a href="http://makergames.net/3dprinters/xyzprinting-da-vinci-1-0/">XYZprinting Da Vinci 1.0</a></li>
				<li><a href="http://makergames.net/3dprinters/flashforge-creator-3d-printer/">FlashForge Creator</a></li>
				<li><a href="http://makergames.net/3dprinters/flashforge-creator-x/">FlashForge Creator X</a></li>
				<li><a href="http://makergames.net/3dprinters/cubify-cube-2/">Cubify Cube 2</a></li>
				<li><a href="http://makergames.net/3dprinters/solidoodle-4th-generation/">Solidoodle 4th Generation</a></li>
				<li><a href="http://makergames.net/3dprinters/up-mini/">UP! Mini</a></li>
			</ul>
		</li>
		
		<li class="widget menu">
			<h3>Volunteer</h3>
			<p>We are looking for talented game makers, 3D digital artists, and writers to join the community</p>
			<a href="http://makergames.net/volunteer/" class="button radius expand">Volunteer</a>
		</li>
		
	<?php endif; ?>
</div><!--sidebar-->