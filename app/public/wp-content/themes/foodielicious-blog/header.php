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
        <h1 class="school-logo-text float-left"><a href="<?php echo site_url() ?>"><strong><?php bloginfo('name')?></strong></a></h1>
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
            <nav class="primary-navigation">
                <div class="menu-names"><?php wp_nav_menu( array(
                    'theme_location' => 'Header Menu',
                    'theme_location' => 'header-menu'
                    ));?> 
                    <ul>
                        <li><a href="<?php echo site_url('/casestudy') ?>">Case Studies</a></li></li>
                        <li><a href="<?php echo site_url('/podcast') ?>">Podcasts</a></li></li>
                    
                    </ul>
                    
                    
                     
                </div>
                <div class="social-media">
                <?php dynamic_sidebar('top-widget');?>   
                </div>
            </nav>
        </div>
    </div>
</header>
<body>