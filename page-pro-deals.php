<?php

$args = array(
    'post_type' => 'pro-deal',
    'post_status' => 'publish',
    'perm' => 'readable',
    'nopaging' => true,
);

$context = Timber::context();
$context['pro_deals'] = new Timber\PostQuery( $args );

$timber_post = new Timber\Post();
$context['post'] = $timber_post;

Timber::render( array( 'pages/' . $timber_post->post_name . '.twig', 'page.twig' ), $context );

?>