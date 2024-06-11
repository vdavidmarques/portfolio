<?php 

    // Custom Post Type plans
    function registrar_plans_custom_post() {
        $labels = array(
            'name'               => 'Planos',
            'singular_name'      => 'plano',
            'menu_name'          => 'Planos',
            'name_admin_bar'     => 'Planos',
            'add_new'            => 'Add novo',
            'add_new_item'       => 'Adicionar novo plano',
            'new_item'           => 'Novo plano',
            'edit_item'          => 'Editar planos',
            'view_item'          => 'Ver planos',
            'all_items'          => 'Todos os planos',
            'search_items'       => 'Pesquisar planos',
            'parent_item_colon'  => 'planos Pai:',
            'not_found'          => 'Nenhum plano encontrado.',
            'not_found_in_trash' => 'Nenhum plano encontrado na lixeira.'
        );
        
        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'planos' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'menu_icon'          => 'dashicons-portfolio',
            'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields'),
        );
        
        register_post_type( 'plans', $args );
    }
    add_action( 'init', 'registrar_plans_custom_post' );

?>