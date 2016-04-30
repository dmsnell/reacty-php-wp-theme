<?php

namespace Layout;

use function Html\div;
use function Functions\Site\get_blog_details;

\Prelude\import( [
  'html',
  'functions/site',
  'layout/blog-footer',
  'layout/blog-header',
  'layout/post-list',
  'layout/single-post',
] );

function Layout() {
  global $wp_query;

  $posts = $wp_query->get_posts();
  $site  = get_blog_details();

  return div( [], [
    BlogHeader( $site ),
    div( [ 'class' => 'content' ], [
      $wp_query->is_single()
        ? SinglePost( $posts[ 0 ] )
        : PostList( $posts )
    ] ),
    BlogFooter()
  ] );
}
