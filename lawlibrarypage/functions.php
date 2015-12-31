<?php
load_theme_textdomain();
$content_width = 580;

function my_init_method() {
    if (!is_admin()) {
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js');
        wp_enqueue_script( 'jquery' );
    }

}

add_action('init', 'my_init_method');



// widgets
	if ( function_exists('register_sidebar') )
	    register_sidebar(array('name'=>'Rightbar'));
        register_sidebar(array('name'=>'Leftbar'));
	    register_sidebar(array('name'=>'Footer A'));
	    register_sidebar(array('name'=>'Footer B'));
	    register_sidebar(array('name'=>'Footer C'));
	    register_sidebar(array('name'=>'Footer D'));
	    register_sidebar(array('name'=>'TopLeft'));
	    register_sidebar(array('name'=>'TopRight'));
	    register_sidebar(array('name'=>'RightHead'));
	    register_sidebar(array(
			'name' => 'Submenu',
			'id' => 'submenu',
			'before_widget' => '<div id="submenu-nav">',
			'after_widget' => '</div>',
			'before_title' => false,
			'after_title' => false
		));
		register_sidebar(array('name'=>'BlogRight'));
// ends ---
// pullquote shortcode
function pullquote( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'float' => '$align',
	), $atts));
   return '<blockquote class="pullquote ' . $float . '">' . $content . '</blockquote>';
}
add_shortcode('pull', 'pullquote');
// ends ---
// admin page

function register_custom_menus() {
register_nav_menus(
	array(
	'main_menu'=> 'Main Menu',
	'top_links'=> 'Top Bar Links',
	'how_tos_menu'=> 'How Tos',
	'faculty_actions'=> 'Faculty Actions',
	'student_actions'=> 'Student Actions'
	)
	);
}


//creates database finder post type

add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'library_database',
    array(
      'labels' => array(
        'name' => __( 'Library Databases' ),
        'singular_name' => __( 'Library Database' )
      ),
      'public' => true,
	  'supports' =>array('title', 'editor', 'excerpt', 'custom-fields'),
	  'taxonomies' =>array('db_type', 'db_keyword', 'access_type', 'alpha_by'),
	  'capability_type'=>'post',
		'has_archive' => true

    )
  );

  //create recent acquisition post type
  
  register_post_type( 'new_acq',
      array(
        'labels' => array(
          'name' => __( 'New Acquisitions' ),
          'singular_name' => __( 'New Acquisitions' )
        ),
        'public' => true,
  	  'supports' =>array('title', 'author', 'editor', 'excerpt'),

  	  'capability_type'=>'post',
  		'has_archive' => true

      )
  );

}

//end creating database finder post type



//creates database finder taxonomies

add_action( 'init', 'create_dbfinder_taxonomies' );


function create_dbfinder_taxonomies() {
  // create a new taxonomy
  register_taxonomy(
    'db_type',
    'library_database',
    array(
      'hierarchical' => true,
      'label' => __('DB Types'),
      'sort' => true,
      'args' => array('orderby' => 'term_order'),
		'rewrite' => array( 'slug' => 'database_type' ),

    )
  );

  register_taxonomy('db_keyword','library_database',array(
      'hierarchical' => false,
      'label' => __('DB Keywords'),
      'rewrite' => array( 'slug' => 'database_tag' ),

    ));

register_taxonomy(
    'access_type',
    'library_database',
    array(
      'hierarchical' => true,
      'label' => __('Access'),
      'sort' => true,
      'args' => array('orderby' => 'term_order'),
		'rewrite' => array( 'slug' => 'access_type' ),

    )
  );


	
register_taxonomy('alpha_by','library_database',array(
		'hierarchical' =>false,
		'label' =>__('First Letter'),
		'rewrite' => array( 'slug' => 'alpha' ),
		
		
	));
	

		

//end creating database finder taxonomies



function new_excerpt_more($more) {
       global $post;
	return '  ...<a href="'. get_permalink($post->ID) . '">Read the Rest</a>...';
}
add_filter('excerpt_more', 'new_excerpt_more');


}




function truncate_list_cats($cat) {

    $limit = 20; // do not make this less than 15

    if(strlen($cat) > $limit)

        $cat = substr($cat, 0, $limit) . '...';

    return $cat;

}

add_filter('list_cats', 'truncate_list_cats');

add_filter( 'xmlrpc_methods', 'remove_xmlrpc_pingback_ping' );
function remove_xmlrpc_pingback_ping( $methods ) {
   unset( $methods['pingback.ping'] );
   return $methods;
} ;



// ends ---
?>