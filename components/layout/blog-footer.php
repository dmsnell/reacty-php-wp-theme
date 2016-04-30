<?php

namespace Layout;

use function Html\div;

\Prelude\import( [
  'html'
] );

function BlogFooter() {
  return div( [ 'class' => 'blog-footer' ], [
    div( [], [ '&copy; 2016' ] ),
    div( [], [ 'Built by Dennis Snell' ] ),
    div( [], [ 'Powered by WordPress' ] ),
  ] );
}
