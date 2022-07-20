<?php

$context = Timber::context();
$timber_post = Timber::query_post();
$context['post'] = $timber_post;

$args = array(
    'post_type' => 'pro-deal',
    'post_status' => 'publish',
    'perm' => 'readable',
    'nopaging' => true,
);

$context['pro_deals'] = new Timber\PostQuery($args);

Timber::render( array(
    'posts/' . $timber_post->ID . '.twig',
    'posts/' . $timber_post->post_type . '.twig',
    'posts/' . $timber_post->slug . '.twig',
    'single.twig' ),
    $context);
?>