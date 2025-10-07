<?php

// Register Custom Post Type - PRODUIT
function product() {

	$labels = array(
		'name'                  => _x( 'Produits', 'Post Type General Name', 'Produit' ),
		'singular_name'         => _x( 'Produit', 'Post Type Singular Name', 'Produit' ),
		'menu_name'             => __( 'Produits', 'Produit' ),
		'name_admin_bar'        => __( 'Produits', 'Produit' ),
		'archives'              => __( 'Archive des produits', 'Produit' ),
		'attributes'            => __( 'Item Attributes', 'Produit' ),
		'parent_item_colon'     => __( 'Parent Item:', 'Produit' ),
		'all_items'             => __( 'Tous les produits', 'Produit' ),
		'add_new_item'          => __( 'Ajouter nouveau produit', 'Produit' ),
		'add_new'               => __( 'Nouveau produit', 'Produit' ),
		'new_item'              => __( 'Nouveau produit', 'Produit' ),
		'edit_item'             => __( 'Modifier produit', 'Produit' ),
		'update_item'           => __( 'Mettre à jour produit', 'Produit' ),
		'view_item'             => __( 'Voir produit', 'Produit' ),
		'view_items'            => __( 'Voir produits', 'Produit' ),
		'search_items'          => __( 'Rechercher produit', 'Produit' ),
		'not_found'             => __( 'Non trouvé', 'Produit' ),
		'not_found_in_trash'    => __( 'Non trouvé dans corbeille', 'Produit' ),
		'featured_image'        => __( 'Featured Image', 'Produit' ),
		'set_featured_image'    => __( 'Set featured image', 'Produit' ),
		'remove_featured_image' => __( 'Remove featured image', 'Produit' ),
		'use_featured_image'    => __( 'Use as featured image', 'Produit' ),
		'insert_into_item'      => __( 'Insert into item', 'Produit' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'Produit' ),
		'items_list'            => __( 'Items list', 'Produit' ),
		'items_list_navigation' => __( 'Items list navigation', 'Produit' ),
		'filter_items_list'     => __( 'Filter items list', 'Produit' ),
	);
	$args = array(
		'label'                 => __( 'Produit', 'Produit' ),
		'description'           => __( 'Post Type Description', 'Produit' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-products',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'product', $args );

}
add_action( 'init', 'product', 0 );

// Register Custom Post Type
function blog() {

	$labels = array(
		'name'                  => 'Articles de blog',
		'singular_name'         => 'Article de blog',
		'menu_name'             => 'Articles de blog',
		'name_admin_bar'        => 'Article de blog',
		'archives'              => 'Archive des articles de blog',
		'attributes'            => 'Item Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'Tous les article de blog',
		'add_new_item'          => 'Ajouter nouveau article de blog',
		'add_new'               => 'Nouveau article de blog',
		'new_item'              => 'Nouveau article de blog',
		'edit_item'             => 'Modifier article de blog',
		'update_item'           => 'Mettre à jour article de blog',
		'view_item'             => 'Voir article de blog',
		'view_items'            => 'Voir article de blog',
		'search_items'          => 'Rechercher article de blog',
		'not_found'             => 'Non trouvé',
		'not_found_in_trash'    => 'Non trouvé dans corbeille',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Items list',
		'items_list_navigation' => 'Items list navigation',
		'filter_items_list'     => 'Filter items list',
	);
	$args = array(
		'label'                 => 'Article de blog',
		'description'           => 'Post Type Description',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-chat',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'blog', $args );

}
add_action( 'init', 'blog', 0 );

// Register Custom Post Type
function tutorial() {

	$labels = array(
		'name'                  => 'Tutoriels',
		'singular_name'         => 'Tutoriel',
		'menu_name'             => 'Tutoriels',
		'name_admin_bar'        => 'Tutoriel',
		'archives'              => 'Archive des tutoriels',
		'attributes'            => 'Item Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'Tous les tutoriels',
		'add_new_item'          => 'Ajouter nouveau tutoriel',
		'add_new'               => 'Nouveau tutoriel',
		'new_item'              => 'Nouveau tutoriel',
		'edit_item'             => 'Modifier tutoriel',
		'update_item'           => 'Mettre à jour tutoriel',
		'view_item'             => 'Voir tutoriel',
		'view_items'            => 'Voir tutoriel',
		'search_items'          => 'Rechercher tutoriel',
		'not_found'             => 'Non trouvé',
		'not_found_in_trash'    => 'Non trouvé dans corbeille',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Items list',
		'items_list_navigation' => 'Items list navigation',
		'filter_items_list'     => 'Filter items list',
	);
	$args = array(
		'label'                 => 'Tutoriel',
		'description'           => 'Post Type Description',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-video-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'tutorial', $args );

}
add_action( 'init', 'tutorial', 0 );