<?php

$args = array(
    'post_type' => 'resources',
    'post_status' => 'publish',
    'perm' => 'readable',
    'nopaging' => true,
);

$context = Timber::context();
$context['team_members'] = new Timber\PostQuery( $args );

Timber::render( 'resources.twig', $context );

?>