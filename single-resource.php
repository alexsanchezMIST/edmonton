<?php

$context = Timber::context();
$timber_post = Timber::query_post();
$context['post'] = $timber_post;

$context['user'] = new Timber\User();

$args = array(
    'post_type' => 'resource',
    'post_status' => 'publish',
    'perm' => 'readable',
    'nopaging' => true,
);

$context['resources'] = new Timber\PostQuery($args);

Timber::render( array(
    'posts/' . $timber_post->ID . '.twig',
    'posts/' . $timber_post->post_type . '.twig',
    'posts/' . $timber_post->slug . '.twig',
    'single.twig' ),
    $context);
?>