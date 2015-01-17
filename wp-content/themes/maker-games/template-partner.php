<?php
/*
Template Name: Partner
*/

$brand = $_GET["id"];
?>

<?php get_header(); ?>


<div class="not-fullscreen partner-page" style="background: #fff;" data-img-width="1600" data-img-height="1064">
    <div class="content-a">
    	<div class="content-b">
	    	<img src="<?php echo get_template_directory_uri() . '/images/partners/partner-' . $brand . '.png' ?>" onerror="this.onerror=null; this.src='<?php echo get_template_directory_uri() . "/images/maker-games-logo.png"?>'" alt="Maker Games Logo"> 
    		<div class="clear"></div>
    	</div>
    </div>
</div>

<section class="not-fullscreen partner-section-1 partner-page">
    <div class="content-a">
        <div class="content-b">
            <h2>We need your help.</h2>
            <h6>Give makers a reason to use their printers.</h6>
            <a class="button radius" href="http://makergames.net/contact/">Become a partner</a>
        </div>
    </div>
</section>

<section class="partner-section-2">

		<div class="row">
			<div class="large-6 column">
				<h4>Featured on our printer guide</h4>
	    	<img src="<?php echo get_template_directory_uri() . '/images/partners/printer-guide-' . $brand . '.png' ?>"> 
	    	<p>We offer a 3d printer guide and other resources to our users so they can start making 3d games. Your printer will be featured at the beginning of the list with special reviews and videos. </p>
			</div>
			
			<div class="large-6 column">
				<h4>Featured in our videos</h4>		
	    	<img src="<?php echo get_template_directory_uri() . '/images/partners/video-desktop.png' ?>"> 	
			<p>We have an aggressive video schedule for game reviews and tutorials. Your product will be featured in these demos. Don't hesitate to be a part.</p> 
			</div>
		</div>

		<div class="row">
			<div class="large-6 column">
				<h4>Written Reviews</h4>
	    	<img src="<?php echo get_template_directory_uri() . '/images/partners/review-' . $brand . '.png' ?>"> 
			<p>In addition to our video reviews we do an exclusive detailed written review of your product.</p> 
	
			</div>
			
			<div class="large-6 column">
				<h4>Site Wide Branding</h4>		
	    	<img src="<?php echo get_template_directory_uri() . '/images/partners/branding-' . $brand . '.png' ?>">
			<p>Feature your brand prominently on our website sidebar. Show that you support the Maker Game community</p> 
			</div>
		</div>

</section>

<section class="not-fullscreen partner-section-1 partner-page">
    <div class="content-a">
        <div class="content-b">
            <h2>Make, Print, Play</h2>
            <h6>Our mission is just that simple.</h6>
            <a class="button radius" href="http://makergames.net/contact/">Become a partner</a>
        </div>
    </div>
</section>

  
		
<?php get_footer(); ?>
