<?php

namespace Post;

use function Html\article;
use function Html\div;

\Prelude\import( [ 'html' ] );

function Post( $post ) {
  return div( [ 'class' => 'post' ], [
    div( [ 'class' => 'post-title' ], [ $post->post_title ] ),
    article( [ 'class' => 'post-content' ], [
      apply_filters( 'the_content', $post->post_content ) ]
    )
  ] );
}
