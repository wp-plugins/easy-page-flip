<?php
// Registers the new post type and taxonomy
function custom_post_easy_pageflip() {
	register_post_type( 'pageflip',
		array(
			'labels' => array(
				'name' => __( 'Revistas' ),
				'singular_name' => __( 'Revista' ),
				'add_new' => __( 'Adicionar Nova Revista' ),
				'add_new_item' => __( 'Adicionar Nova Revista' ),
				'edit_item' => __( 'Editar Revista' ),
				'new_item' => __( 'Adicionar Nova Revista' ),
				'view_item' => __( 'Visualizar Revista' ),
				'search_items' => __( 'Procurar Revistas' ),
				'not_found' => __( 'N&atilde;o Encontrada' ),
				'not_found_in_trash' => __( 'N&atilde;o Encontrada na Lixeira' )
			),
			'public' => true,
			'supports' => array( 'title', 'editor', 'thumbnail'),
			'capability_type' => 'post',
			'menu_icon' => plugins_url( '/images/icon-revista.png' , __FILE__ ),
			'rewrite' => array("slug" => "revista"), // Permalinks format
			'menu_position' => 5
		)
	);
}
add_action( 'init', 'custom_post_easy_pageflip' );