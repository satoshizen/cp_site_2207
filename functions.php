<?php
// CSSの読み込み・JSの読み込み
function mp_enqueue_files()
{
  // WordPress提供のjquery.jsを読み込まない
  wp_deregister_script('jquery');

  // jqueryの読み込み
  wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js', "", "2.1.4", false);

  // fontawesome 
  wp_enqueue_script('fontawesome', 'http://kit.fontawesome.com/33d01a83f0.js', "", "", false);

  // サイト共通のJS
  wp_enqueue_script('hamburger', get_template_directory_uri() . '/js/g-nav.js', array('jquery'), '1.0', true);
  
  wp_enqueue_script('header', get_template_directory_uri() . '/js/header.js', array('jquery'), '1.0', true);


  //サイト共通のCSSの読み込み
  wp_enqueue_style('normalize', 'http://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css', '', '8.0.1');
  wp_enqueue_style('mp_main', get_stylesheet_uri(), array('normalize'), '1.0');
}
add_action('wp_enqueue_scripts', 'mp_enqueue_files');

// テーマのサポート
function mp_theme_support()
{
  add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('menus');
}
add_action('after_setup_theme', 'mp_theme_support');

//SVGをアップロード
function mp_add_file_types_to_uploads($file_types)
{

  $new_filetypes = array();
  $new_filetypes['svg'] = 'image/svg+xml';
  $file_types = array_merge($file_types, $new_filetypes);

  return $file_types;
}
add_action('upload_mimes', 'mp_add_file_types_to_uploads');

// post_type = 'post' でもアーカイブページを作る
function post_has_archive_func($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'topic';
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive_func', 10, 2);
