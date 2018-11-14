<?php

// Register Sidebars
function sidebars() {

	$args = array(
		'id'            => 'agenda',
		'name'          => __( 'Agenda', 'text_domain' ),
		'description'   => __( 'Local onde inserir a agenda', 'text_domain' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'redes',
		'name'          => __( 'Redes Sociais', 'text_domain' ),
		'description'   => __( 'Lugar onde inserir os plugins para as redes sociasi', 'text_domain' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );

}
add_action( 'widgets_init', 'sidebars' );



?>
