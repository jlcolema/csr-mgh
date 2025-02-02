<?php
	global $avia_config;

	/*
	 * get_header is a basic wordpress function, used to retrieve the header.php file in your theme directory.
	 */
	 get_header();

	$title  = __('Blog - Latest News', 'avia_framework'); //default blog title
	$t_link = home_url('/');
	$t_sub = "";

	if(avia_get_option('frontpage') && $new = avia_get_option('blogpage'))
	{
		$title 	= get_the_title($new); //if the blog is attached to a page use this title
		$t_link = get_permalink($new);
		$t_sub =  avia_post_meta($new, 'subtitle');
	}

	if( get_post_meta(get_the_ID(), 'header', true) != 'no') echo avia_title(array('heading'=>'strong', 'title' => $title, 'link' => $t_link, 'subtitle' => $t_sub));

	do_action( 'ava_after_main_title' );

?>

		<div class='container_wrap container_wrap_first main_color <?php avia_layout_class( 'main' ); ?>'>

			<div class='container template-blog template-single-blog '>

				<main class='content units <?php avia_layout_class( 'content' ); ?> <?php echo avia_blog_class_string(); ?>' <?php avia_markup_helper(array('context' => 'content','post_type'=>'post'));?>>

                    <?php
                    /* Run the loop to output the posts.
                    * If you want to overload this in a child theme then include a file
                    * called loop-index.php and that will be used instead.
                    *
                    */

                        get_template_part( 'includes/loop', 'index' );

                        //show related posts based on tags if there are any
                        get_template_part( 'includes/related-posts');

                        //wordpress function that loads the comments template "comments.php"
                        //comments_template();

                    ?>

				<!--end content-->

				</main>

				<!-- Sidebar -->

				<aside class="sidebar sidebar_right smartphones_sidebar_active alpha units">

					<div class="inner_sidebar extralight-border">

						<?php echo do_shortcode("[pods template='Symposium Sidebar']"); ?>

						<section id="" class="widget widget-symposium-archive clearfix">

							<h3 class="widgettitle">Previous Events</h3>

							<div class="">

								<ul>

									<li>

										<a href="/symposiums/2017-symposium/">2017 Symposium</a>

									</li>

									<li>

										<a href="/symposiums/2016-symposium/">2016 Symposium</a>

									</li>

									<li>

										<a href="/symposiums/2015-symposium/">2015 Symposium</a>

									</li>

								</ul>

							</div>

							<span class="seperator extralight-border"></span>

						</section>

					</div>

				</aside>

			</div><!--end container-->

		</div><!-- close default .container_wrap element -->

<?php get_footer(); ?>
