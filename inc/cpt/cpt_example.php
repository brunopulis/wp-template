<?php

/**
 * See how to create custom post type
 * 
 * @see https://github.com/wpbrasil/odin/wiki/Classe-Odin_Post_Type
 */
function cpt_examples() {
	$events = new Odin_Post_Type(
		'Examples',
		'examples'
	);

	$events->set_labels(
		array(
			'menu_name' => __( 'My example', 'odin' )
		)
	);

	$events->set_arguments(
		array(
      'menu_icon' => 'dashicons-clipboard'
		)
	);
}

add_action( 'init', 'cpt_examples', 1 );
