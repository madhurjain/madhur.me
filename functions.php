<?php  

if ( function_exists('register_sidebar') )  
	register_sidebar(array(  
		'before_widget' => '',  
		'after_widget' => '',  
		'before_title' => '<h2>',  
		'after_title' => '</h2>',  
	));
	
function get_page_ID($page_name) {
	global $wpdb;
	$page_name_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '".$page_name."'");
	return $page_name_id;
}
	
	
add_action('wp_ajax_retrievePost', 'retrievePost');
add_action('wp_ajax_nopriv_retrievePost', 'retrievePost');

function retrievePost() {
	global $wpdb;
	$t = $_POST['title'];
	$o = get_page_by_title( $t, "OBJECT", "post");
	echo $o -> post_content;
	die();
} 
	
?>
