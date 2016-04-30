<?php

namespace Post;

use function Html\a;
use function Html\div;
use function Html\span;

\Prelude\import( [ 'html' ] );

function PostExcerpt( $post ) {
  $classNames = implode( ' ', [
    'post',
    sprintf( 'post-%d', $post->ID ),
    'post-excerpt'
  ] );

  return div( [ 'class' => $classNames ], [
    a( [
      'class' => 'post-title',
      'href' => get_permalink( $post )
    ], [ $post->post_title ] )
  ] );
}
