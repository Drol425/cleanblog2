<?php
register_sidebar(array(
   'name' => __("New Widget Area", CURRENT_THEME),
   'id' => 'new-widget-area-sidebar',
   'description' => __("New Widget Area", CURRENT_THEME),
   'before_widget' => '<div id="%1$s">',
   'after_widget' => '</div>',
   'before_title' => '<h4>',
   'after_title' => '</h4>',
));
add_theme_support( 'post-thumbnails' ); // для всех постов