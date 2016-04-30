<?php

namespace Post;

use function Html\article;
use function Html\div;

\Prelude\import( [ 'html' ] );

function Post( $post ) {
  return div( [], [
    div( [], [ $post->post_title ] ),
    article( [], [ $post->post_content ] )
  ] );
}
