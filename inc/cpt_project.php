<?php
/* Bones Custom Post Type Example This page walks you through creating a custom post type 
and taxonomies. You can edit this one or copy the following code to create another one. 

Developed by: Eddie Machado with some YIKES, Inc. stuff thrown in.
URL: http://themble.com/bones/ and http://yikesinc.com
*/


// let's create the function for the custom type "Kittens"
function custom_post_ldhd() { 
	// creating (registering) the custom type 
	register_post_type( 'cpt_ldhd', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type. More info on all this: http://codex.wordpress.org/Function_Reference/register_post_type#Arguments
		array('labels' => array(
			'name' => __('LDHD', 'post type general name'), /* This is the Title of the Group */
			'singular_name' => __('Note', 'post type singular name'), /* This is the individual type */
			'add_new' => __('Add a Note', 'Note'), /* The add new menu item */
			'add_new_item' => __('Add New Note'), /* Add New Display Title */
			'edit' => __( 'Edit' ), /* Edit Dialog */
			'edit_item' => __('Edit LDHD'), /* Edit Display Title */
			'new_item' => __('New Note'), /* New Display Title */
			'view_item' => __('View Note'), /* View Display Title */
			'search_items' => __('Search LDHD'), /* Search Custom Type Title */ 
			'not_found' =>  __('Sorry, there are no notes to be found.'), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __('Nope, no Notes in the Trash'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			
			'description' => __( 'This is to post type for LDHD notes' ), /* Custom Type Description */
			'public' => true, /* Do you want this CPT viewable to the public on the front end? */
			'publicly_queryable' => true, /* Do you want this CPT to be searchable in the front-end search */
			'exclude_from_search' => false, /* Do you want this CPT to turn up in search results? */
			'show_ui' => true, /* Do you want this CPT to have an admin in the back-end? */
			'menu_position' => 20, /* this is what order you want it to appear in on the left hand side menu */ 
			'rewrite' => array('slug'=>'ldhd'), /* you can define the slug for your CPT, by default it will be your CPT's name which isn't always pretty */ 
			'menu_icon' => get_stylesheet_directory_uri() . '/inc/images/kitten-icon.png', /* the icon for the custom post type menu 16px square */
			/* the next one is important, it tells what's enabled in the post editor. Your options are:
			'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats' */
			'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions', 'custom-fields', 'post-formats')
	 	) /* end of options */
		
	); /* end of register post type */
	
} 

	// adding the function to the Wordpress init
	add_action( 'init', 'custom_post_ldhd');
	
	/*
	for more information on taxonomies, go here: http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/
	
	// now let's add custom categories (these act like categories)
    register_taxonomy( 'custom_cat_breeds', 
    	array('wcp_kittens'), /* this is the name of your CPT so these custom categories are associated with it */
    	array('hierarchical' => true,     /* if this is true it acts like categories */             
    		'labels' => array(
    			'name' => __( 'Breeds' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Breed' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search Breeds' ), /* search title for taxomony */
    			'all_items' => __( 'All Breeds' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Breed' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Breed:' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Breed' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Update Breed' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New Breed' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Breed Name' ) /* name title for taxonomy */
    		),
    		'show_ui' => true,
    		'query_var' => true,
			'rewrite' => array( 'slug' => 'breeds' ), /* define the slug, by default it will be your taxonomy's name which isn't always pretty */
    	)
    );   
    	
	// now let's add custom tags (these act like tags)
    register_taxonomy( 'custom_cat_color', 
    	array('wcp_kittens'), /* this is the name of your CPT so these custom categories are associated with it */
    	array('hierarchical' => false,     /* if this is false it acts like tags */             
    		'labels' => array(
    			'name' => __( 'Colors' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Color' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search Colors' ), /* search title for taxomony */
    			'all_items' => __( 'All Colors' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Color' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Color:' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Color' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Update Color' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New Color' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Color Name' ) /* name title for taxonomy */
    		),
    		'show_ui' => true,
    		'query_var' => true,
			'rewrite' => array( 'slug' => 'color' ), /* define the slug, by default it will be your taxonomy's name which isn't always pretty */
    	)
    );   
    
	// now let's add more custom tags (these act like tags)
    register_taxonomy( 'custom_tag_markings', 
    	array('wcp_kittens'), /* this is the name of your CPT so these custom tags are associated with it */
    	array('hierarchical' => false,    /* if this is false, it acts like tags */                
    		'labels' => array(
    			'name' => __( 'Markings' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Markings' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search Markings' ), /* search title for taxomony */
    			'all_items' => __( 'All Markings' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Markings' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Markings:' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Markings' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Update Markings' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New Markings' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Markings Name' ) /* name title for taxonomy */
    		),
    		'show_ui' => true,
    		'query_var' => true,
			'rewrite' => array( 'slug' => 'markings' ), /* define the slug, by default it will be your taxonomy's name which isn't always pretty */
    	)
    ); 
	
	
	// Bonus: now let's customize the admin columns for Kittens

	add_filter("manage_edit-wcp_kittens_columns", "wcp_kittens_edit_columns");   
	  
	function wcp_kittens_edit_columns($columns){  
        $columns = array(  
			'cb' => '<input type="checkbox" />',
			'title' => __( 'Kitten Name' ),
            'description' => 'Kitten Description',  
			'date' => __('Date')
        );  
  
        return $columns;  
	}  

	add_action( 'manage_wcp_kittens_posts_custom_column', 'manage_wcp_kittens_columns'); 
	  
	function manage_wcp_kittens_columns($column){  
        global $post;  
        switch ($column)  
        {  
			/* If displaying the 'description' column. */
            case "description":  
                the_excerpt();  
                break;  
        }  	
}
	

?>