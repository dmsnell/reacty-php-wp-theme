<?php

namespace Prelude;

function resolveModule( $moduleName ) {
  $path = realpath( join( DIRECTORY_SEPARATOR, [ __DIR__, 'components', $moduleName . '.php' ] ) );

  return is_readable( $path )
    ? $path
    : false;
}

function requireModule( $path ) {
  require_once $path;
}

function import( $moduleNames ) {
  $modulePaths = array_map( 'Prelude\resolveModule', $moduleNames );
  $modulePaths = array_filter( $modulePaths, 'is_string' );

  array_walk( $modulePaths, 'Prelude\requireModule' );
}
