<?php

$context = Timber::context();

$args = array(
    'post_type' => 'person',
    'post_status' => 'publish',
    'perm' => 'readable',
    'nopaging' => true,
    'meta_key' => 'weight',
    'orderby' => 'meta_value_num',
    'order' => 'ASC',
);

$context['people'] = new Timber\PostQuery($args);

$timber_post = new Timber\Post();
$context['post'] = $timber_post;
Timber::render( array( 'pages/' . $timber_post->post_name . '.twig', 'page.twig' ), $context );

?>