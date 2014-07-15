<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" /> 
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css" type="text/css" media="screen" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
    <?php wp_head(); ?>

</head>

<body>

<div id="header">
    <div class="header-inner">
        <a href="<?php bloginfo('url'); ?>">
        <div class="header-logo">
            <p class="header-logo-title"><?php bloginfo('name'); ?></p>
            <p class="header-logo-text"><?php bloginfo('description'); ?></p>
        </div>
        </a>
        <div class="header-search">
            <i class="icon-search"></i>
            <?php get_search_form(); ?>
        </div>
        <nav id="nav" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
            <?php wp_nav_menu( array(
                'theme_location'  => 'primary',
                'container'       => false,
                'menu_class'      => 'nav-menu clearfix',
                'depth'           => 2
            ) ); ?>
        </nav>
        
    </div>
</div>