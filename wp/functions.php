<?php

include('settings.php');

/*===================================================================================
 * Add Post Thumbnails
 * =================================================================================*/
if ( function_exists( 'add_theme_support' ) ) {

  add_theme_support( 'post-thumbnails' );
  add_image_size('post-img',1250,430,true);
  add_image_size('blog-img',715,245,true);
  add_image_size('blog-img-alt',715,330,true);

}

/*===================================================================================
 * Add Author Links
 * =================================================================================*/
function add_to_author_profile( $contactmethods ) {
		
	$contactmethods['twitter_profile'] = 'Twitter Profile URL';
	$contactmethods['twitter_name'] = 'Twitter Nickname';
	
	return $contactmethods;
}
add_filter( 'user_contactmethods', 'add_to_author_profile', 10, 1);

?>
