<?php
/*
*  Template name: Training page
*/
?>
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

				<div class="logo">
					<a href="<?php bloginfo('url');?>"><img src="<?php bloginfo('template_directory');?>/images/logo.png" alt=""></a>
				</div>

				<div class="the-page training-title">
					<h1>Training</h1>
					<p>
						<?php if (dynamic_sidebar('training-block')); ?>
					</p>
<!-- 					<a href="<?php bloginfo('url');?>/contact-us">
						<button class="training-btn">
							Contact Us
						</button>
					</a> -->
					
				</div>
				
			</header>
        
			<footer>
				<p>Designed by <a href="http://beetleinc.co.za/" target="_blank">Beetle Inc </a>| &copy; ATS Lab</p>
			</footer>

			
			
			</aside>
			<section id="content" class="column-right training">
<!--       <div class="overlay"></div>
      <?php if ( have_posts()) : while (have_posts()) : the_post(); ?>	
			<diV class='page-content-bg'>
				<?php the_content(); ?>
			</diV>
     <?php endwhile; else: ?>
        <diV class='page-content-bg'>
				<h1>Oh no!</h1>
        <p>No content is appearing for this page!</p>
			</diV>
     <?php endif; ?>     		 -->
	    <article>
			
		</article>
		 <?php if ( have_posts()) : while (have_posts()) : the_post(); ?>	
			<diV class='training-content-bg'>
				<?php the_content(); ?>
			</diV>
     <?php endwhile; else: ?>
        <diV class='training-content-bg'>
				<h1>Oh no!</h1>
        <p>No content is appearing for this page!</p>
			</diV>
     <?php endif; ?>
		</section>

		<!-- <div class="clear"></div> -->

	</section>
<?php get_footer();?>
