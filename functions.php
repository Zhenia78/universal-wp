<?php

add_action('wp_enqueue_scripts', 'universal_scripts');

function universal_scripts() {
  wp_enqueue_style('swiper-bundle-style', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');wp_enqueue_style('404-style', get_template_directory_uri() . '/assets/css/404-style.css');
  wp_enqueue_style('universal-style', get_stylesheet_uri());

  wp_deregister_script('jquery');
  wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js');
  wp_enqueue_script('jquery');
  wp_enqueue_script('jscroll-scripts', '//unpkg.com/jscroll/dist/jquery.jscroll.min.js', array('jquery'), null, true);
  wp_enqueue_script('validation-scripts', get_template_directory_uri() . '/assets/js/jquery.validate.min-dist.js', array('jquery'), null, true);
  wp_enqueue_script('swiper-bundle-scripts', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array('jquery'), null, true);
  wp_enqueue_script('universal-scripts', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);

}

add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
	register_nav_menu( 'header', 'Меню в шапке сайта' );
	register_nav_menu( 'footer', 'Меню в подвале сайта' );
}

add_filter("nav_menu_link_attributes", "filter_nav_menu_link_attributes", 10, 3);
function filter_nav_menu_link_attributes($atts, $item, $args) {
  $menu_titles = array("News", "Arts", "Travel", "Sports", "Tech", "Moneys");
  foreach($menu_titles as $menu_title) {
    if ($args->theme_location === "header" && $args->menu === $menu_title) {
    $atts["class"] = "menu__item header__item";
  }
  }

  foreach($menu_titles as $menu_title) {
    if ($args->theme_location === "footer" && $args->menu === $menu_title) {
      $atts["class"] = "menu__item footer__item";
  }
  }

  if ($args->menu === "Main") {
    $atts["class"] = "btnhover header__link";
  }

      
  return $atts;
}


add_theme_support('custom-logo');
add_theme_support('menus');


























?>