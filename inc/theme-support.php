<?php

/// theme support
///
///
///


$options = get_option( 'post_formats' );
//echo 'hi';


$output  = [];
$formats = [ 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ];
foreach ( $formats as $format ) {
  $output[] = @$options[ $format ] == 1 ? $format : '';
}


if ( ! empty( $options ) ) {
  add_theme_support( 'post-formats', $output );
}

