<?php

use function Html\div;
use function Layout\SinglePost;
use function Layout\PostList;

require_once( 'prelude.php' );

Prelude\import( [
  'html',
  'layout/single-post',
  'layout/post-list'
] );

function render() {
  global $wp_query;

  $posts = $wp_query->get_posts();

  return $wp_query->is_single()
    ? SinglePost( $posts[ 0 ] )
    : PostList( $posts );
}

echo render();
