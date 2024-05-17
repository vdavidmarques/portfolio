<?php 

    // Custom Post Type works
    function registrar_works_custom_post() {
        $labels = array(
            'name'               => 'Works',
            'singular_name'      => 'Works',
            'menu_name'          => 'works',
            'name_admin_bar'     => 'Works',
            'add_new'            => 'Add new',
            'add_new_item'       => 'Add new Works',
            'new_item'           => 'Novo Works',
            'edit_item'          => 'Editar Works',
            'view_item'          => 'Ver Works',
            'all_items'          => 'Todos os works',
            'search_items'       => 'Pesquisar works',
            'parent_item_colon'  => 'works Pai:',
            'not_found'          => 'Nenhum Works encontrado.',
            'not_found_in_trash' => 'Nenhum Works encontrado na lixeira.'
        );
        
        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'works' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'menu_icon'          => 'dashicons-portfolio',
            'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields'),
        );
        
        register_post_type( 'works', $args );
    }
    add_action( 'init', 'registrar_works_custom_post' );

?>