<?php 



register_nav_menus(

        array(

                'primary' => __( 'main-menu' )

        )

);



add_theme_support('post-thumbnails');

add_image_size('list_post', 365, 201, true);

add_image_size('list_maison', 555, 545, true);

add_image_size('slider', 1920, 830, true);

add_image_size('menu', 160, 100, true);

add_image_size('menuMega', 245, 150, true);





/*****************Nos temoignages*****************/

function temoignages() {



	$labels = array(

			'name'                => _x( 'Nos temoignages', 'Post Type General Name', 'text_domain' ),

			'singular_name'       => _x( 'Nos temoignages', 'Post Type Singular Name', 'text_domain' ),

			'menu_name'           => __( 'Nos temoignages', 'text_domain' ),

			'all_items'           => __( 'Tous les temoignages', 'text_domain' ),

			'view_item'           => __( 'Voir', 'text_domain' ),

			'add_new_item'        => __( 'Ajouter un nouveau', 'text_domain' ),

			'add_new'             => __( 'Ajouter un nouveau', 'text_domain' ),

			'edit_item'           => __( 'Modifier', 'text_domain' ),

			'update_item'         => __( 'Mettre a jour', 'text_domain' ),

			'search_items'        => __( 'Rechercher', 'text_domain' ),

			'not_found'           => __( 'Aucun temoignage trouver', 'text_domain' ),

			'not_found_in_trash'  => __( 'Aucun temoignage trouver', 'text_domain' ),

	);

	$args = array(

			'label'               => __( 'Nos temoignages', 'text_domain' ),

			'description'         => __( 'Nos temoignages information pages', 'text_domain' ),

			'labels'              => $labels,

			'supports'            =>   array( 'title', 'thumbnail', 'excerpt',"editor" ),

			'taxonomies'          => array(''),

			'hierarchical'        => false,

			'public'              => true,

			'show_ui'             => true,

			'show_in_menu'        => true,

			'show_in_nav_menus'   => true,

			'show_in_admin_bar'   => true,

			'menu_position'       => 1,

			'can_export'          => true,

			'has_archive'         => true,

			'exclude_from_search' => true,

			'publicly_queryable'  => true,

			'capability_type'     => 'page',

	);

	register_post_type( 'temoignages', $args );

    

}

add_action( 'init', 'temoignages' );



/*****************Nos maisons*****************/

function maisons() {



	$labels = array(

			'name'                => _x( 'Nos maisons', 'Post Type General Name', 'text_domain' ),

			'singular_name'       => _x( 'Nos maisons', 'Post Type Singular Name', 'text_domain' ),

			'menu_name'           => __( 'Nos maisons', 'text_domain' ),

			'all_items'           => __( 'Tous les maisons', 'text_domain' ),

			'view_item'           => __( 'Voir', 'text_domain' ),

			'add_new_item'        => __( 'Ajouter un nouveau', 'text_domain' ),

			'add_new'             => __( 'Ajouter un nouveau', 'text_domain' ),

			'edit_item'           => __( 'Modifier', 'text_domain' ),

			'update_item'         => __( 'Mettre a jour', 'text_domain' ),

			'search_items'        => __( 'Rechercher', 'text_domain' ),

			'not_found'           => __( 'Aucun maison trouver', 'text_domain' ),

			'not_found_in_trash'  => __( 'Aucun maison trouver', 'text_domain' ),

	);

	$args = array(

			'label'               => __( 'Nos maisons', 'text_domain' ),

			'description'         => __( 'Nos maisons information pages', 'text_domain' ),

			'labels'              => $labels,

			'supports'            =>   array( 'title', 'thumbnail', 'excerpt',"editor" ),

			'taxonomies'          => array(''),

			'hierarchical'        => false,

			'public'              => true,

			'show_ui'             => true,

			'show_in_menu'        => true,

			'show_in_nav_menus'   => true,

			'show_in_admin_bar'   => true,

			'menu_position'       => 4,

			'can_export'          => true,

			'has_archive'         => true,

			'exclude_from_search' => true,

			'publicly_queryable'  => true,

			'capability_type'     => 'page',

	);

	register_post_type( 'maisons', $args );

    

}

add_action( 'init', 'maisons' );





/*****************Nos terrains*****************/

function terrains() {



	$labels = array(

			'name'                => _x( 'Nos terrains', 'Post Type General Name', 'text_domain' ),

			'singular_name'       => _x( 'Nos terrains', 'Post Type Singular Name', 'text_domain' ),

			'menu_name'           => __( 'Nos terrains', 'text_domain' ),

			'all_items'           => __( 'Tous les terrains', 'text_domain' ),

			'view_item'           => __( 'Voir', 'text_domain' ),

			'add_new_item'        => __( 'Ajouter un nouveau', 'text_domain' ),

			'add_new'             => __( 'Ajouter un nouveau', 'text_domain' ),

			'edit_item'           => __( 'Modifier', 'text_domain' ),

			'update_item'         => __( 'Mettre a jour', 'text_domain' ),

			'search_items'        => __( 'Rechercher', 'text_domain' ),

			'not_found'           => __( 'Aucun terrain trouver', 'text_domain' ),

			'not_found_in_trash'  => __( 'Aucun terrain trouver', 'text_domain' ),

	);

	$args = array(

			'label'               => __( 'Nos terrain', 'text_domain' ),

			'description'         => __( 'Nos terrain information pages', 'text_domain' ),

			'labels'              => $labels,

			'supports'            =>   array( 'title', 'thumbnail', 'excerpt',"editor" ),

			'taxonomies'          => array(''),

			'hierarchical'        => false,

			'public'              => true,

			'show_ui'             => true,

			'show_in_menu'        => true,

			'show_in_nav_menus'   => true,

			'show_in_admin_bar'   => true,

			'menu_position'       => 6,

			'can_export'          => true,

			'has_archive'         => true,

			'exclude_from_search' => true,

			'publicly_queryable'  => true,

			'capability_type'     => 'page',

	);

	register_post_type( 'terrains', $args );

    

}

add_action( 'init', 'terrains' );



function pret_widgets_init() {

	register_sidebar( array(

		'name'          => __( 'Compte a rebour', 'pret' ),

		'id'            => 'sidebar',

		'description'   => __( 'Ajoutez des widgets ici pour les faire apparaître dans la page d\'attente', 'pret' ),

		'before_widget' => '<aside id="%1$s" class="widget %2$s">',

		'after_widget'  => '</aside>',

		'before_title'  => '<h2 class="widget-title">',

		'after_title'   => '</h2>',

	) );

}

add_action( 'widgets_init', 'pret_widgets_init' );



/******************ADD EXCERPT******************************/

/*add_action( 'init', 'my_add_excerpts_to_pages' );

function my_add_excerpts_to_pages() {

     add_post_type_support( 'page', 'excerpt' );

}



function add_taxonomies_to_pages() {

     register_taxonomy_for_object_type( 'category', 'page' );

     }

add_action( 'init', 'add_taxonomies_to_pages' );



*/

?>