<?php

namespace Layout;

use function Html\div;

\Prelude\import( [
  'html',
  'post-excerpt'
] );

function PostList( $posts ) {
  return div( [], array_map( 'Post\PostExcerpt', $posts ) );
}
