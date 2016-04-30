<?php

namespace Layout;

use function Html\a;
use function Html\div;
use function Components\Image;

\Prelude\import( [
  'html',
  'image'
] );

function BlogHeader( $site ) {
  return div( [ 'class' => 'blog-header' ], [
    div( [ 'class' => 'blogname blog-title' ], [
      a( [ 'href' => $site->siteurl ], [
        $site->blogname
      ] )
    ] ),
    div( [ 'class' => 'blog-description' ], [ $site->description ] )
  ] );
}
