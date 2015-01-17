<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <title><?php
if (is_category()) {
    echo 'Category Archive for &quot;';
    single_cat_title();
    echo '&quot; | ';
    bloginfo('name');
} elseif (is_tag()) {
    echo 'Tag Archive for &quot;';
    single_tag_title();
    echo '&quot; | ';
    bloginfo('name');
} elseif (is_archive()) {
    wp_title('');
    echo ' Archive | ';
    bloginfo('name');
} elseif (is_search()) {
    echo 'Search for &quot;' . wp_specialchars($s) . '&quot; | ';
    bloginfo('name');
} elseif (is_home()) {
    bloginfo('name');
    echo ' | ';
    bloginfo('description');
} elseif (is_404()) {
    echo 'Error 404 Not Found | ';
    bloginfo('name');
} elseif (is_single()) {
    wp_title('');
} else {
    echo wp_title(' | ', false, right);
    bloginfo('name');
}
?></title>
        <meta name="description" content="<?php wp_title('');
echo ' | ';
bloginfo('description'); ?>" />
        <meta charset="<?php bloginfo('charset'); ?>" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
        <link rel="icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />
        <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('atom_url'); ?>" />
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    	<?php include_once("inc/analyticstracking.php") ?>
        <div class="hide">
            <p><a href="#content">Skip to Content</a></p>
        </div><!--.hide-->
		<div class="contain-to-grid sticky">
			  <nav class="top-bar" data-topbar data-options="sticky_on: large">		  <ul class="title-area">
			    <li class="name">
			    	<div class="text-logo">
				    	<a href="<?php bloginfo('home');?>">
				        	<img src="<?php echo get_template_directory_uri() . '/images/maker-games-logo-solid.svg' ?>" onerror="this.onerror=null; this.src='<?php echo get_template_directory_uri() . "/images/maker-games-logo.png"?>'" alt="Maker Games Logo">
				        	<h1><?php  bloginfo('name'); ?></h1>
				    	</a>
			    	</div>
			    </li>
			     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
			    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
			  </ul>
			
			  <section class="top-bar-section">
				<?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
			  </section>
			</nav> 
		</div>
		       
        
