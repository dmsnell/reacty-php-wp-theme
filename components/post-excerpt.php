<?php

namespace Post;

use function Html\a;
use function Html\div;
use function Html\span;
use function Components\Image;

\Prelude\import( [
  'html',
  'components/image'
] );

function Thumbnail( $url ) {
  return div( [ 'class' => 'thumbnail' ], [
    Image( $url )
  ] );
}

function PostExcerpt( $post ) {
  $classNames = implode( ' ', [
    'post',
    sprintf( 'post-%d', $post->ID ),
    'post-excerpt'
  ] );

  $thumbnailUrl = get_the_post_thumbnail_url( $post );

  return div( [ 'class' => $classNames ], [
    empty( $thumbnailUrl )
      ? ''
      : Thumbnail( $thumbnailUrl ),
    a( [
      'class' => 'post-title',
      'href' => get_permalink( $post )
    ], [ $post->post_title ] )
  ] );
}
