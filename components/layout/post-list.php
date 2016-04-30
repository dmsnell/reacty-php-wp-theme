<?php

namespace Layout;

use function Html\div;

\Prelude\import( [
  'html',
  'post-excerpt'
] );

function PostList( $posts ) {
  return div( [ 'class' => 'post-list' ],
    array_map( 'Post\PostExcerpt', $posts )
  );
}
