<?php
    function foodie_post_types(){
        register_post_type('recipe',array(
            'rewrite'=> array('slug' => 'recipe' ),
            'taxonomies' => array('category'),
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail','excerpt'),
            'public' => true,
            'labels' => array(
            'name' => "Recipes",
            'add_new_item' => 'Add New Recipe',
            'edit_item' => 'Edit Recipe',
            'all_items' => 'Recipes',
            'singular_name' => "Recipe"
            ),
        'menu_icon' => 'dashicons-carrot'
        ));

        register_post_type('casestudy',array(
            'rewrite'=> array('slug' => 'casestudy' ),
            'taxonomies' => array('category'),
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail','excerpt'),
            'public' => true,
            'labels' => array(
            'name' => "Case Studies",
            'add_new_item' => 'Add New Case Study',
            'edit_item' => 'Edit Case Study',
            'all_items' => 'Case Studies',
            'singular_name' => "Case Study"
            ),
        'menu_icon' => 'dashicons-book'
        ));

        register_post_type('podcast',array(
            'rewrite'=> array('slug' => 'podcast' ),
            'taxonomies' => array('category'),
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail','excerpt'),
            'public' => true,
            'labels' => array(
            'name' => "Podcasts",
            'add_new_item' => 'Add New Podcast',
            'edit_item' => 'Edit Podcast',
            'all_items' => 'Podcasts',
            'singular_name' => "Podcast"
            ),
        'menu_icon' => 'dashicons-microphone'
        ));
    }
    
    add_action('init', 'foodie_post_types');
    
?>