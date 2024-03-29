<!DOCTYPE html>
<html <? language_attributes(); ?> >
<?php
    if(! is_active_sidebar('top-widget')){
        return;
    }    
?>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <?php wp_head();?>
</head>
<header class="site-header">
    <div class="container">
        <h1 class="school-logo-text float-left"><a href="#"><strong><?php bloginfo('name')?></strong></a></h1>
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
            <nav class="primary-navigation">
                <div class="menu-names"><?php wp_nav_menu( array( 
                    'theme_location' => 'header-menu' 
                    ) );?>
                </div>
                <div class="social-media">
                <?php dynamic_sidebar('top-widget');?>   
                </div>
            </nav>
        </div>
    </div>
</header>
<body>