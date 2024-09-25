<?php
/* ***************************************************** */
// css/jsの読み込み
/* ***************************************************** */
// アクションフックの登録
add_action('wp_enqueue_scripts', 'theme_enqueue_files');
add_theme_support('post-thumbnails');
function theme_enqueue_files() {
  //slick用css
  wp_enqueue_style('slick-theme-sytle', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array(), NULL);
  wp_enqueue_style('slick-sytle', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array('slick-theme-sytle'), NULL);
  // オリジナルcss
  wp_enqueue_style('my-style', get_theme_file_uri('/style.css'), array('slick-sytle'), filemtime(get_theme_file_path('/style.css')));
  // デフォルトのjQuery本体を削除とCDNで読み込み
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', true);
  // slick用js
  wp_enqueue_script('slick-script', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), null, true);
  // オリジナルjs
  wp_enqueue_script('main-script', get_theme_file_uri('/script.js'), array('jquery', 'slick-script'), filemtime(get_theme_file_path('/script.js')), true);
}

/* ***************************************************** */
// カスタムメニュー
/* ***************************************************** */
//メニューを管理画面に追加
register_nav_menus(array(
  'header' => 'ヘッダーメニュー',
));

/* global-stylesのインラインCSS出力を排除する */
add_action('wp_enqueue_scripts', 'remove_global_styles');
function remove_global_styles() {
wp_dequeue_style('global-styles');
}

//ウィジェット
function sample_widgets(){
  register_sidebar(array(
  "name" => "AB", /* ←追加したいウィジェットの名前 */
  "description" => "ABテスト用", /* ←追加したいウィジェットの概要 */
  "id" => "ab_1", /* ←追加したいウィジェットのID */
  "before_widget" => "<div>", /* ←追加したいウィジェットを囲う開始タグ */
  "after_widget" => "</div>", /* ←追加したいウィジェットを囲う閉じタグ */
  "before_title" => "<h3>", /* ←追加したいウィジェットのタイトルを囲う開始タグ */
  "after_title" => "</h3>" /* ←追加したいウィジェットのタイトルを囲う閉じタグ */
  ));
  }
  add_action('widgets_init', 'sample_widgets');

  function load_cta_template() {
    ob_start();
    include(get_template_directory() . '/short/cta.php');
    return ob_get_clean();
}

add_shortcode('cta', 'load_cta_template');