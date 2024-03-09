<?php
/**
 * TEMPLATENAME functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package TEMPLATENAME
 */

/*
 * ----------------------------------------------------------------------------------------
 *  GET TEMPLATE DIRECTORY
 * ----------------------------------------------------------------------------------------
 */

// require get_template_directory() . '/inc/enqueue.php';
// require get_template_directory() . '/inc/theme-support.php';
// require get_template_directory() . '/inc/theme-options.php';
// require get_template_directory() . '/inc/cleanup.php';
// require get_template_directory() . '/inc/custom-post.php';
// require get_template_directory() . '/inc/custom-taxonomy.php';
// require get_template_directory() . '/inc/custom-fields.php';

remove_action('wp_head','rest_output_link_wp_head');
remove_action('wp_head','wp_oembed_add_discovery_links');
remove_action('wp_head','wp_oembed_add_host_js');

remove_action('template_redirect', 'rest_output_link_header', 11 );

function post_has_archive($args, $post_type){
    if('post'== $post_type){
      $args['rewrite']=true;
      $args ["label"] = 'お知らせ'; /*「投稿」のラベル名 */
      $args['has_archive']='post'; /* アーカイブにつけるスラッグ名 */
    }
    return $args;
  }
  
  add_filter('register_post_type_args', 'post_has_archive', 10, 2);
  