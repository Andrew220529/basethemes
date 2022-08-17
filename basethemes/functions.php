<?php
/*
Template Name: テーマ関数
*/
?>
<?php
add_theme_support('post-thumbnails');
?>
<?php
function remove_hwstring_from_image_tag( $html, $id, $caption, $title, $align, $url, $size ) {
    list( $img_src, $width, $height ) = image_downsize($id, $size);
    $hwstring = image_hwstring( $width, $height );
    $html = str_replace( $hwstring, '', $html );
    return $html;
}
add_filter( 'image_send_to_editor', 'remove_hwstring_from_image_tag', 10, 7 );


if (function_exists('register_sidebar')) {

register_sidebar(array(
 'name' => 'ウィジェット名',
 'id' => 'ウィジェットのID',
 'description' => 'ウィジェットの説明',
 'before_widget' => 'ウィジェットを囲む開始タグ',
 'after_widget' => 'ウィジェットを囲む終了タグ',
 'before_title' => 'ウィジェットのタイトルを囲む開始タグ',
 'after_title' => 'ウィジェットのタイトルを囲む終了タグ'
 ));

}
/* 固定ページのみビジュアルエディタを非表示 */
function disable_visual_editor_in_page(){
  global $typenow;
  if( $typenow == 'page' ){
    add_filter('user_can_richedit', 'disable_visual_editor_filter');
  }
}
function disable_visual_editor_filter(){
  return false;
}
add_action( 'load-post.php', 'disable_visual_editor_in_page' );
add_action( 'load-post-new.php', 'disable_visual_editor_in_page' );
?>
