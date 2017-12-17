<?php
    add_theme_support('title-tag'); 
	add_theme_support('menus');
	add_theme_support('widgets');
	add_theme_support('post-thumbnails');
	add_theme_support('custom-header');
	add_theme_support('custom-background');
    register_nav_menus(array(
    
        'left'=> __('Left Menu'),
        'right'=> __('Right Menu'),
    
    ));
	
	
?>