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

    register_post_type('chef',array(
        'rewrite'=> array('slug' => 'chef' ),
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => true,
        'labels' => array(
            'name' => "Chefs",
            'add_new_item' => 'Add New Chef',
            'edit_item' => 'Edit Chef',
            'all_items' => 'All Chefs',
            'singular_name' => "Chef"
        ),
        'menu_icon' => 'dashicons-admin-users'
    ));
    }
    add_action('init', 'foodie_post_types');