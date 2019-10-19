<?php
	add_action('init', 'tgb_init');
	function tgb_init(){
		if (!session_id())
        	session_start();

		/*Snippets to add the Roles*/
		add_role(
		    'lodges',
		    __( 'Lodges (Business)' ),
		    array(
		        'read'         => true,  // true allows this capability
		        'edit_posts'   => true,
		        'delete_posts' => false, // Use false to explicitly deny
		    )
		);

		add_role(
		    'guides',
		    __( 'Guides' ),
		    array(
		        'read'         => true,  // true allows this capability
		        'edit_posts'   => true,
		        'delete_posts' => false, // Use false to explicitly deny
		    )
		);
	}

?>