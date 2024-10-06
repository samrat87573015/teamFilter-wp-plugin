<?php  


// Register Custom Post Type
function create_team_post_type()
{
    $labels = array(
        'name' => __('Teams', 'teamfilter'),
        'singular_name' => __('Team', 'teamfilter'),
        'menu_name' => __('Team', 'teamfilter'),
        'name_admin_bar' => __('Team', 'teamfilter'),
        'add_new' => __('Add New', 'teamfilter'),
        'add_new_item' => __('Add New Team Member', 'teamfilter'),
        'new_item' => __('New Team Member', 'teamfilter'),
        'edit_item' => __('Edit Team Member', 'teamfilter'),
        'view_item' => __('View Team Member', 'teamfilter'),
        'all_items' => __('All Team Members', 'teamfilter'),
        'search_items' => __('Search Team Members', 'teamfilter'),
        'parent_item_colon' => __('Parent Team Members:', 'teamfilter'),
        'not_found' => __('No team members found.', 'teamfilter'),
        'not_found_in_trash' => __('No team members found in Trash.', 'teamfilter')
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_rest' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'team'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('team', $args);
}

add_action('init', 'create_team_post_type');

// Register Custom Taxonomies
function create_team_taxonomies()
{
    // Add new taxonomy 'Services'
    register_taxonomy(
        'service',
        'team',
        array(
            'labels' => array(
                'name' => __('Services', 'teamfilter'),
                'singular_name' => __('Service', 'teamfilter'),
                'search_items' => __('Search Services', 'teamfilter'),
                'all_items' => __('All Services', 'teamfilter'),
                'edit_item' => __('Edit Service', 'teamfilter'),
                'update_item' => __('Update Service', 'teamfilter'),
                'add_new_item' => __('Add New Service', 'teamfilter'),
                'new_item_name' => __('New Service Name', 'teamfilter'),
                'menu_name' => __('Services', 'teamfilter'),
            ),
            'hierarchical' => true, // Set this to false if you want a non-hierarchical taxonomy
            'show_in_rest' => true,
            'rewrite' => array('slug' => 'service')
        )
    );


    // Add new taxonomy 'Role'
    register_taxonomy(
        'role',
        'team',
        array(
            'labels' => array(
                'name' => __('Roles', 'teamfilter'),
                'singular_name' => __('Role', 'teamfilter'),
                'search_items' => __('Search Roles', 'teamfilter'),
                'all_items' => __('All Roles', 'teamfilter'),
                'edit_item' => __('Edit Role', 'teamfilter'),
                'update_item' => __('Update Role', 'teamfilter'),
                'add_new_item' => __('Add New Role', 'teamfilter'),
                'new_item_name' => __('New Role Name', 'teamfilter'),
                'menu_name' => __('Role', 'teamfilter'),
            ),
            'hierarchical' => true,
            'show_in_rest' => true,
            'rewrite' => array('slug' => 'role')
        )
    );

    // Add new taxonomy 'Expertise'
    register_taxonomy(
        'expertise',
        'team',
        array(
            'labels' => array(
                'name' => __('Expertises', 'teamfilter'),
                'singular_name' => __('Expertise', 'teamfilter'),
                'search_items' => __('Search Expertise', 'teamfilter'),
                'all_items' => __('All Expertise', 'teamfilter'),
                'edit_item' => __('Edit Expertise', 'teamfilter'),
                'update_item' => __('Update Expertise', 'teamfilter'),
                'add_new_item' => __('Add New Expertise', 'teamfilter'),
                'new_item_name' => __('New Expertise Name', 'teamfilter'),
                'menu_name' => __('Expertise', 'teamfilter'),
            ),
            'hierarchical' => true,
            'show_in_rest' => true,
            'rewrite' => array('slug' => 'expertise')
        )
    );
    // Add new taxonomy 'Practice'
    register_taxonomy(
        'practice',
        'team',
        array(
            'labels' => array(
                'name' => __('Practices', 'teamfilter'),
                'singular_name' => __('Practice', 'teamfilter'),
                'search_items' => __('Search Practice', 'teamfilter'),
                'all_items' => __('All Practice', 'teamfilter'),
                'edit_item' => __('Edit Practice', 'teamfilter'),
                'update_item' => __('Update Practice', 'teamfilter'),
                'add_new_item' => __('Add New Practice', 'teamfilter'),
                'new_item_name' => __('New Practice Name', 'teamfilter'),
                'menu_name' => __('Practice', 'teamfilter'),
            ),
            'hierarchical' => true,
            'show_in_rest' => true,
            'rewrite' => array('slug' => 'practice')
        )
    );
}

add_action('init', 'create_team_taxonomies');


