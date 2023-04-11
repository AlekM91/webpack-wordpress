<!DOCTYPE html>
<!-- 
Made by: Aleksandar Mitrevski
https://github.com/AlekM91
https://www.linkedin.com/in/alekm91/
 -->
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
<header class="site-header">
    <div class="header-inner wrapper">
        <div class="logo">logo.</div>
        <nav>
            <?php wp_nav_menu(array('theme_location' => 'mainMenu', 'menu_class' => 'main-nav')) ?>
        </nav>
    </div>
</header>