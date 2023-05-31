<?php

    function load_css(){


     wp_register_style('mainstyle', get_template_directory_uri().'/assets/css/style.css', array(), 1, 'all');
      wp_enqueue_style('mainstyle');

//     wp_register_style('openiconic', get_template_directory_uri().'/assets/css/open-iconic-bootstrap.min.css', array(), 1, 'all');
//       wp_enqueue_style('openiconic');
       
      wp_register_style('animatecss', get_template_directory_uri().'/assets/css/animate.css', array(), 1, 'all');
      wp_enqueue_style('animatecss');

       wp_register_style('owlcarousel', get_template_directory_uri().'/assets/css/owl.carousel.min.css', array(), 1, 'all');
      wp_enqueue_style('owlcarousel');

//        wp_register_style('vcarouselcss', get_template_directory_uri().'/assets/css/carousel.css', array(), 1, 'all');
//       wp_enqueue_style('vcarouselcss');

      // wp_register_style('owlcaro','http://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css');
      // wp_enqueue_style('owlcaro');

      // wp_register_style('owltheme','http://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css');
      // wp_enqueue_style('owltheme');


      wp_register_style('owltheme', get_template_directory_uri().'/assets/css/owl.theme.default.min.css', array(), 1, 'all');
      wp_enqueue_style('owltheme');

      wp_register_style('magnific',  get_template_directory_uri().'/assets/css/magnific-popup.css', array(), 1, 'all');
      wp_enqueue_style('magnific');

      wp_register_style('aoscss',get_template_directory_uri().'/assets/css/aos.css', array(), 1, 'all');
      wp_enqueue_style('aoscss'); 
      

       wp_register_style('fontaws','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
      wp_enqueue_style('fontaws');

      wp_register_style('googlefont','https://fonts.googleapis.com/css?family=Poppins:300,400,700');
      wp_enqueue_style('googlefont');

      

       wp_register_style('merrifont','https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;1,400&family=Playfair+Display:wght@400;500;600;700&display=swap');
      wp_enqueue_style('merrifont');

      // Vendor Plugin

       wp_register_style('ionicons', get_template_directory_uri().'/assets/css/ionicons.min.css', array(), 1, 'all');
      wp_enqueue_style('ionicons');

      wp_register_style('bootstrapdate', get_template_directory_uri().'/assets/css/bootstrap-datepicker.css', array(), 1, 'all');
      wp_enqueue_style('bootstrapdate');

      wp_register_style('timepicker', get_template_directory_uri().'/assets/css/jquery.timepicker.css', array(), 1, 'all');
      wp_enqueue_style('timepicker');

      wp_register_style('flaticon', get_template_directory_uri().'/assets/css/flaticon.css', array(), 1, 'all');
      wp_enqueue_style('flaticon');

//       wp_register_style('icomoon', get_template_directory_uri().'/assets/css/icomoon.css', array(), 1, 'all');
//       wp_enqueue_style('icomoon');

  


    


     
     // Theme Directory Style.css

       wp_register_style('style', get_template_directory_uri().'/style.css', array(), 1, 'all');
      wp_enqueue_style('style');
    }

add_action('wp_enqueue_scripts','load_css');


function load_js(){



      // wp_register_script('jquerymin','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', null, null, true);
      // wp_enqueue_script('jquerymin');

      //  wp_register_script('boots','https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js', null, null, true);
      // wp_enqueue_script('boots');
    

        // Java Script Bundle

        wp_register_script('jqueryjs',get_template_directory_uri().'/assets/js/jquery.min.js', array(), 1,1,1);
      wp_enqueue_script('jqueryjs');


      wp_register_script('migratejs',get_template_directory_uri().'/assets/js/jquery-migrate-3.0.1.min.js', array(), 1,1,1);
      wp_enqueue_script('migratejs');

      wp_register_script('popperjs',get_template_directory_uri().'/assets/js/popper.min.js', array(), 1,1,1);
      wp_enqueue_script('popperjs');

       wp_register_script('bootstrapjs',get_template_directory_uri().'/assets/js/bootstrap.min.js', array(), 1,1,1);
      wp_enqueue_script('bootstrapjs');

      wp_register_script('easingjs',get_template_directory_uri().'/assets/js/jquery.easing.1.3.js', array(), 1,1,1);
      wp_enqueue_script('easingjs');

    wp_register_script('waypointsjs',get_template_directory_uri().'/assets/js/jquery.waypoints.min.js', array(), 1,1,1);
      wp_enqueue_script('waypointsjs');

       wp_register_script('stellarjs',get_template_directory_uri().'/assets/js/jquery.stellar.min.js', array(), 1,1,1);
      wp_enqueue_script('stellarjs');

      wp_register_script('owlcarouseljs',get_template_directory_uri().'/assets/js/owl.carousel.min.js', array(), 1,1,1);
      wp_enqueue_script('owlcarouseljs');

//         wp_register_script('vcarousaljs',get_template_directory_uri().'/assets/js/carousel.js', array(), 1,1,1);
//       wp_enqueue_script('vcarousaljs');

       wp_register_script('magnificpopupjs',get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js', array(), 1,1,1);
      wp_enqueue_script('magnificpopupjs');

      wp_register_script('aosjs',get_template_directory_uri().'/assets/js/aos.js', array(), 1,1,1);
      wp_enqueue_script('aosjs');

//       wp_register_script('animateNumberjs',get_template_directory_uri().'/assets/js/jquery.animateNumber.min.js', array(), 1,1,1);
//       wp_enqueue_script('animateNumberjs');

      wp_register_script('scrollifyjs',get_template_directory_uri().'/assets/js/jquery.scrollify.js', array(), 1,1,1);
      wp_enqueue_script('scrollifyjs');

      // Fullpage Scriptjs

     

      wp_register_script('scrollaxjs',get_template_directory_uri().'/assets/js/scrollax.min.js', array(), 1,1,1);
      wp_enqueue_script('scrollaxjs');

       wp_register_script('datepickerjs',get_template_directory_uri().'/assets/js/bootstrap-datepicker.js', array(), 1,1,1);
      wp_enqueue_script('datepickerjs');

      wp_register_script('timepickerjs',get_template_directory_uri().'/assets/js/jquery.timepicker.min.js', array(), 1,1,1);
      wp_enqueue_script('timepickerjs');

      // wp_register_script('apijs','https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false', array(), 1,1,1);
      // wp_enqueue_script('apijs');

//       wp_register_script('mapjs',get_template_directory_uri().'/assets/js/google-map.js', array(), 1,1,1);
//       wp_enqueue_script('mapjs');

      wp_register_script('mainjs',get_template_directory_uri().'/assets/js/main.js', array(), 1,1,1);
      wp_enqueue_script('mainjs');
      



 
   
     


}
add_action('wp_enqueue_scripts','load_js');



  register_nav_menus(
        array('primary-menu' =>'Header Menu Location',
                'mobile-menu' =>'Mobile Menu Location')

      );

  add_theme_support('post-thumbnails');
  add_theme_support('custom-header');


// ------------ EXCLUDE A CATAGORY -----------------

function exclude_category($query){
	if( $query ->is_home()){
		$query->set('cat','-131');
	}
	return $query;
}
add_filter('pre_get_posts','exclude_category');


//  Call Custome Template Template for Blog Category

function get_custom_cat_template($single_template){
	global $post;
		
		if( in_category( 'case-studies' )){
			$single_template = dirname(__FILE__) . '/template-casestudy-single.php';
			
		}
	return $single_template;
}
add_filter("single_template", "get_custom_cat_template");


// ------------------- SVG UPLOAD

add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {
  $filetype = wp_check_filetype( $filename, $mimes );
  return [
      'ext'             => $filetype['ext'],
      'type'            => $filetype['type'],
      'proper_filename' => $data['proper_filename']
  ];

}, 10, 4 );

function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function fix_svg() {
  echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'fix_svg' );


// ------------------------- CUSTOME POST TYPE JOB ---------------------------------------


// Register Custom Post Type Job
function create_job_cpt() {

	$labels = array(
		'name' => _x( 'Jobs', 'Post Type General Name', 'software-craft' ),
		'singular_name' => _x( 'Job', 'Post Type Singular Name', 'software-craft' ),
		'menu_name' => _x( 'Jobs', 'Admin Menu text', 'software-craft' ),
		'name_admin_bar' => _x( 'Job', 'Add New on Toolbar', 'software-craft' ),
		'archives' => __( 'Job Archives', 'software-craft' ),
		'attributes' => __( 'Job Attributes', 'software-craft' ),
		'parent_item_colon' => __( 'Parent Job:', 'software-craft' ),
		'all_items' => __( 'All Jobs', 'software-craft' ),
		'add_new_item' => __( 'Add New Job', 'software-craft' ),
		'add_new' => __( 'Add New', 'software-craft' ),
		'new_item' => __( 'New Job', 'software-craft' ),
		'edit_item' => __( 'Edit Job', 'software-craft' ),
		'update_item' => __( 'Update Job', 'software-craft' ),
		'view_item' => __( 'View Job', 'software-craft' ),
		'view_items' => __( 'View Jobs', 'software-craft' ),
		'search_items' => __( 'Search Job', 'software-craft' ),
		'not_found' => __( 'Not found', 'software-craft' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'software-craft' ),
		'featured_image' => __( 'Featured Image', 'software-craft' ),
		'set_featured_image' => __( 'Set featured image', 'software-craft' ),
		'remove_featured_image' => __( 'Remove featured image', 'software-craft' ),
		'use_featured_image' => __( 'Use as featured image', 'software-craft' ),
		'insert_into_item' => __( 'Insert into Job', 'software-craft' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Job', 'software-craft' ),
		'items_list' => __( 'Jobs list', 'software-craft' ),
		'items_list_navigation' => __( 'Jobs list navigation', 'software-craft' ),
		'filter_items_list' => __( 'Filter Jobs list', 'software-craft' ),
	);
	$args = array(
		'label' => __( 'Job', 'software-craft' ),
		'description' => __( 'Job openings', 'software-craft' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-groups',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'post-formats', 'custom-fields'),
		'taxonomies' => array('category'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'job', $args );

}
add_action( 'init', 'create_job_cpt', 0 );



// ------------------------- END CUSTOME POST TYPE JOB ---------------------------------------





// ------------------------ Cutome Post Type Case Study  --------------------------------






// Register Custom Post Type case study
// function create_casestudy_cpt() {

// 	$labels = array(
// 		'name' => _x( 'case studies', 'Post Type General Name', 'textdomain' ),
// 		'singular_name' => _x( 'case study', 'Post Type Singular Name', 'textdomain' ),
// 		'menu_name' => _x( 'Case Studies', 'Admin Menu text', 'textdomain' ),
// 		'name_admin_bar' => _x( 'case study', 'Add New on Toolbar', 'textdomain' ),
// 		'archives' => __( 'case study Archives', 'textdomain' ),
// 		'attributes' => __( 'case study Attributes', 'textdomain' ),
// 		'parent_item_colon' => __( 'Parent case study:', 'textdomain' ),
// 		'all_items' => __( 'All case studies', 'textdomain' ),
// 		'add_new_item' => __( 'Add New case study', 'textdomain' ),
// 		'add_new' => __( 'Add New', 'textdomain' ),
// 		'new_item' => __( 'New case study', 'textdomain' ),
// 		'edit_item' => __( 'Edit case study', 'textdomain' ),
// 		'update_item' => __( 'Update case study', 'textdomain' ),
// 		'view_item' => __( 'View case study', 'textdomain' ),
// 		'view_items' => __( 'View case studies', 'textdomain' ),
// 		'search_items' => __( 'Search case study', 'textdomain' ),
// 		'not_found' => __( 'Not found', 'textdomain' ),
// 		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
// 		'featured_image' => __( 'Featured Image', 'textdomain' ),
// 		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
// 		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
// 		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
// 		'insert_into_item' => __( 'Insert into case study', 'textdomain' ),
// 		'uploaded_to_this_item' => __( 'Uploaded to this case study', 'textdomain' ),
// 		'items_list' => __( 'case studies list', 'textdomain' ),
// 		'items_list_navigation' => __( 'case studies list navigation', 'textdomain' ),
// 		'filter_items_list' => __( 'Filter case studies list', 'textdomain' ),
// 	);
// 	$args = array(
// 		'label' => __( 'case study', 'textdomain' ),
// 		'description' => __( '', 'textdomain' ),
// 		'labels' => $labels,
// 		'menu_icon' => 'dashicons-book',
// 		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'post-formats', 'custom-fields'),
// 		'taxonomies' => array('category', 'post_tag'),
// 		'public' => true,
// 		'show_ui' => true,
// 		'show_in_menu' => true,
// 		'menu_position' => 10,
// 		'show_in_admin_bar' => true,
// 		'show_in_nav_menus' => true,
// 		'can_export' => true,
// 		'has_archive' => true,
// 		'hierarchical' => false,
// 		'exclude_from_search' => false,
// 		'show_in_rest' => true,
// 		'publicly_queryable' => true,
// 		'capability_type' => 'post',
// 	);
// 	register_post_type( 'casestudy', $args );

// }
// add_action( 'init', 'create_casestudy_cpt', 0 );


// ---------------------------- End Case Study Post Type  ---------------------


// function get_custom_cat_template($single_template) {
//    global $post;

//       if ( in_category( 'case-studies' )) {
//          $single_template = dirname( __FILE__ ) . '/template-Filhalluk.php';
//       }
//    return $single_template;
// }

// add_filter( "single_template", "get_custom_cat_template" ) ;



// function get_breadcrumb() {
// 	if(is_front_page()){
// 					echo"";
// 				}else{
//     echo '<a href="'.home_url().'" style="color: #a1cc3a;" rel="nofollow">Home</a>';}
//     if (is_category() || is_single()) {
//         echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
//         the_category(' &bull; ');
//             if (is_single()) {
// 				if(is_front_page()){
// 					echo"";
// 				}else{
// 					echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
//                 the_title();
// 				}
                
//             }
//     } elseif (is_page()) {
// 		if(is_front_page()){
// 					echo"";
// 				}else{
//         echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
//         echo the_title();}
//     } elseif (is_search()) {
//         echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
//         echo '"<em>';
//         echo the_search_query();
//         echo '</em>"';
//     }
// }
















function smartwp_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-blocks-style' ); // Remove WooCommerce block CSS
} 
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );



?>
