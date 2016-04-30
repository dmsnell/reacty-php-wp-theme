<?php

namespace Html;

function htmlElement( $element, $props, $children ) {
  $attributes = array_map( function( $key ) use ( $props ) {
    return sprintf( '%s="%s"', $key, $props[ $key ] );
  }, array_keys( $props ) );

  return empty( $children )
    ? sprintf( '<%s %s/>', $element, implode( ' ', $attributes ) )
    : sprintf(
        '<%s %s>%s</%s>',
        $element,
        implode( ' ', $attributes ),
        implode( '', $children ),
        $element
      );
}

function div( $props, $children ) {
  return htmlElement( 'div', $props, $children );
}

function span( $props, $children ) {
  return htmlElement( 'span', $props, $children );
}

function strong( $props, $children ) {
  return htmlElement( 'strong', $props, $children );
}

function em( $props, $children ) {
  return htmlElement( 'em', $props, $children );
}

function a( $props, $children ) {
  return htmlElement( 'a', $props, $children );
}

function h1( $props, $children ) {
  return htmlElement( 'h1', $props, $children );
}

function h2( $props, $children ) {
  return htmlElement( 'h2', $props, $children );
}

function h3( $props, $children ) {
  return htmlElement( 'h3', $props, $children );
}

function h4( $props, $children ) {
  return htmlElement( 'h4', $props, $children );
}

function article( $props, $children ) {
  return htmlElement( 'article', $props, $children );
}
