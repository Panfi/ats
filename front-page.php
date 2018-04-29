<?php get_header();?>
<body>

		<section id="body" class="width">
			<aside id="sidebar" class="column-left">
			<header>
				<div class="menu" onclick="openNav()"><img src="<?php bloginfo('template_directory');?>/images/hamburger.png"></div>
				<div id="mySidenav" class="sidenav">
				  <div class="closebtn" onclick="closeNav()"><img src="<?php bloginfo('template_directory');?>/images/close.png" ></div>
				  <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</div>
				
				
				<div class="logo hide-mobile">
					<a href="<?php bloginfo('url');?>"><img src="<?php bloginfo('template_directory');?>/images/logo.png" alt=""></a>
				</div>

				<div class="the-head">
					<h2>Welcome To The</h2>
					<h1>ATS LAB</h1>
					<p>Quality testing processes<br>that adhere to international standards</p>
				</div>
				
			</header>
        <div class="hexagon">
				<?php if (dynamic_sidebar('hexagon-block')); ?>
			</div>
			<div class="hexagon2">
				<?php if (dynamic_sidebar('hexagon-block2')); ?>
			</div> 
			<footer>
				<p>Designed by <a href="http://beetleinc.co.za/" target="_blank">Beetle Inc </a>| &copy; ATS Lab</p>
			</footer>

			
			
			</aside>
			<section id="content" class="column-right">
                		
	    <article>
				
			<div class="footer">
				<p>Designed by <a href="http://beetleinc.co.za/" target="_blank">Beetle Inc </a>| &copy; ATS Lab</p>
			</div>
		
		</article>
		 <?php if ( have_posts()) : while (have_posts()) : the_post(); ?>	
			<div class="sana">
				<img src="http://45.32.245.33/ats/wp-content/uploads/2018/03/SANAS-Testing-Lab-Logo.png">	
			</div>
			<diV class='home-content-bg'>
				<?php the_content(); ?>
			</diV>
     <?php endwhile; else: ?>
        <diV class='home-content-bg'>
				<h1>Oh no!</h1>
        <p>No content is appearing for this page!</p>
			</diV>
     <?php endif; ?>
		</section>

		<!-- <div class="clear"></div> -->

	</section>
<?php get_footer();?>