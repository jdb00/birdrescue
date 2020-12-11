<?php
    function register_resource() {
        //register menu
        register_nav_menu('main-menu', 'Main Menu' );

    

        $args = array(
            'public'    => true,
            'label'     => 'Sections',
        );
        register_post_type( 'section', $args );

        $args = array(
            'public'    => true,
            'label'     => 'Services',
        );
        register_post_type( 'service', $args );

        $args = array(
            'public'    => true,
            'label'     => 'News',
        );
        register_post_type( 'news', $args );

        $args = array(
            'label'        => 'Add a Type',
            'public'       => true,
            'hierarchical' => true,
            'show_in_nav_menus' => true
        );

        register_taxonomy( 'type', 'news', $args );
    }
    add_action( 'init', 'register_resource' );

    function add_class_to_li( $classes, $item, $args ) {

        $classes[] = "nav-item";
    
        return $classes;
    }
    add_filter( 'nav_menu_css_class' , 'add_class_to_li' , 10, 4 );

    function add_class_to_anchors( $atts ) {
        $atts['class'] = 'nav-link';
    
        return $atts;
    }
    add_filter( 'nav_menu_link_attributes', 'add_class_to_anchors', 10 );
    


?>