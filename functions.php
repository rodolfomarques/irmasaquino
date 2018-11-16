<?php

function my_function_admin_bar(){
    return false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

// Register Navigation Menus
function custom_navigation_menus() {

	$locations = array(
		'menu-topo' => __( 'Primeiro Menu do site', 'text_domain' ),
		'menu-rodape' => __( 'Último Menu do Site', 'text_domain' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'custom_navigation_menus' );


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
