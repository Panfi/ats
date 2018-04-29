 
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title('|', true, 'right');?><?php bloginfo('name');?></title>
    <?php wp_head();?>
</head>
<div class="white-banner hide-desktop">
    <div class="logo">
        <a href="<?php bloginfo('url');?>"><img src="<?php bloginfo('template_directory');?>/images/logo.png" alt=""></a>
    </div>
<!--     <div class="menu" onclick="openNav()"><img src="<?php bloginfo('template_directory');?>/images/hamburger.png"></div>
    <div id="mySidenav" class="sidenav">
        <div class="closebtn" onclick="closeNav()"><img src="<?php bloginfo('template_directory');?>/images/close.png" ></div>
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
    </div>	 -->
</div>

