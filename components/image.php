<?php

namespace Components;

use function Html\img;

function Image( $URL, $options = [] ) {
  return img( array_merge( $options, [ 'src' => $URL ] ) );
}
