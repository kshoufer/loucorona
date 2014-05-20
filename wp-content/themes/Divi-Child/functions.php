<?php

function bgmpShortcodeCalled()
{
    global $post;
    
    $shortcodePageSlugs = array(
        'hello-world',
        'second-page-slug'
    );
    
    if( $post )
        if( in_array( $post->post_name, $shortcodePageSlugs ) )
            add_filter( 'bgmp_map-shortcode-called', '__return_true' );
}
add_action( 'wp', 'bgmpShortcodeCalled' );

?>