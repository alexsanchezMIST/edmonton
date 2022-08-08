<?php

$context = Timber::context();

$args = array(
    'post_type' => 'logo',
    'post_status' => 'publish',
    'perm' => 'readable',
    'nopaging' => true,
    'orderby' => 'rand',
);

$context['logos'] = new Timber\PostQuery($args);

$timber_post = new Timber\Post();
$context['post'] = $timber_post;
Timber::render( array( 'pages/' . $timber_post->post_name . '.twig', 'page.twig' ), $context );

?>