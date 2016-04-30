<?php

use function Html\div;
use function Layout\Layout;

require_once( 'prelude.php' );

Prelude\import( [
  'html',
  'layout/layout',
] );

function stylesheet( $name ) {
  return Html\link( [
    'rel' => 'stylesheet',
    'href' => get_template_directory_uri() . DIRECTORY_SEPARATOR . $name
  ] );
}

function render() {
  return Html\html( [], [
    Html\head( [], [
      stylesheet( 'style.css' )
    ] ),
    Html\body( [], [
      Layout()
    ] )
  ] );
}

echo render();
