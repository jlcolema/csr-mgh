<?php

/*
* Add your own functions here. You can also copy some of the theme functions into this file. 
* Wordpress will use those functions instead of the original functions then.
*/

/*Replaces "Blog - Latest News" with the post title :*/

add_filter('avf_title_args', 'fix_single_post_title', 10, 2);
function fix_single_post_title($args,$id)
{
    if ( $args['title'] == 'Blog - Latest News' )
    {
        $args['title'] = get_the_title($id);
        $args['link'] = get_permalink($id);
        $args['heading'] = 'h1';	
    }

    return $args;
}

/* ADDS FULL WIDTH BANNER ATOP ALL PAGES - OR INTERIOR ONLY */
function after_head_image_func($content){
	if ( !is_home() && !is_front_page() ) {
		//echo "<div  align='center'><img class='avia_image' src='/wp-content/uploads/2015/12/maize-breeding-statistical-genetics-logo-1500-wide-cropped-centered-e5cc00.png' width='100%' /></div>"; 
	} 
}
add_action('ava_after_main_container', 'after_head_image_func');

/* logos */
// additional logo
add_action('ava_before_bottom_main_menu','custom_things');
function custom_things() {
	echo '<strong class="additional-logo" style="left: 0 !important; padding-top: 5px; position: absolute;"><div class="logo-link-box"><img style="height: 75px;" src="http://csr-mgh.org/wp-content/uploads/2017/04/mgh-logo.png"></div></strong>';
	echo '<strong class="additional-logo" style="right: 0 !important; position: absolute;"><div class="logo-link-box"><img src="http://csr-mgh.org/wp-content/uploads/2017/04/harvard-logo.png"></div></strong>';
}
