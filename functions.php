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
register_sidebar(array(
   'name' => __("Footer Area", CURRENT_THEME),
   'id' => 'footer-sidebar',
   'description' => __("Footer Area", CURRENT_THEME),
   'before_widget' => '<div id="%1$s">',
   'after_widget' => '</div>',
   'before_title' => '<h4>',
   'after_title' => '</h4>',
));
add_theme_support( 'post-thumbnails' ); // для всех постов
//Удаляем meta name generator (WP version)
add_filter('the_generator', '__return_empty_string', 99);
remove_action('wp_head', 'wp_generator', 99);

function zacompom_remove_version() {//удаляем версию вордпресс
return '';
}
add_filter('the_generator', 'zacompom_remove_version');
function zacompom_wordpress_errors(){//убираем ошибку ввода данных в админке вордпресс
  return '';
}
add_filter( 'login_errors', 'zacompom_wordpress_errors' );


remove_filter( 'authenticate', 'wp_authenticate_email_password', 20 );//удаляем аунтефикацию с использованием почты

// Включение коротких кодов в текстовых виджетах
add_filter('widget_text','do_shortcode');

function zacompom_imagelink_setup() {//удаляем ссылки изображений в постах
	$image_set = get_option( 'image_default_link_type' );
	
	if ($image_set !== 'none') {
		update_option('image_default_link_type', 'none');
	}
}
add_action('admin_init', 'zacompom_imagelink_setup', 10);


add_filter('xmlrpc_enabled', '__return_false');//удаляем xmlrpc

add_filter('excerpt_length', 'my_excerpt_length');
register_nav_menus( array(
    'additionalmenu' => __( 'Additional Menu', 'cleanblog' )
) );