<?php

namespace Functions\Site;

function get_blog_details() {
  return (object) [
    'blogname'    => get_option( 'blogname' ),
    'description' => get_option( 'blogdescription' ),
    'siteurl'     => get_option( 'siteurl' ),
    'postCount'   => get_option( 'post_count' ),
    'home'        => get_option( 'home' ),
  ];
}
