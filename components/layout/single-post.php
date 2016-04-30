<?php

namespace Layout;

use function Html\div;
use function Post\Post;

\Prelude\import( [
  'html',
  'post'
] );

function SinglePost( $post ) {
    return div( [], [ Post( $post ) ] );
}
