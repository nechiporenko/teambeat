<?php if ( is_home() || is_front_page() ) { ?>
	<footer class="blog-footer blog-footer--product">
<?php } else { ?>
	<footer class="blog-footer">
<?php } ?>	
		<div class="container">
			<div class="f-column f-column--left">
				<figure class="f-about">
					<img src="<?php bloginfo('template_directory'); ?>/img/logo-small.svg" alt="Teambit" />
					<figcaption>
						<a href="<?php bloginfo('url'); ?>">Teambit</a> is everything you need to make your organization a great place to work.
					</figcaption>
				</figure>
			</div><!--/f-column-->
			<div class="f-column f-column--right">
				<section class="f-column f-column--inner">
					<h5 class="f-title">About</h5>
					<ul class="f-menu">
						<li><a href="<?php bloginfo('url'); ?>/blog">Blog</a></li>
						<li><a href="mailto:alex@teambit.io">Shedule a demo</a></li>
						<li><a href="<?php bloginfo('url'); ?>/terms">Terms and privacy</a></li>
					</ul>
				</section>
				<section class="f-column f-column--inner">
					<h5 class="f-title">Connect</h5>
					<?php $shortname = "teambeat"; ?>
					<ul class="f-menu">
						<li><a href="mailto:hello@teambit.io">Contact us</a></li>
						<li><a href="<?php echo get_option($shortname.'_twitter_link',''); ?>" target="_blank">Twitter</a></li>
						<li><a href="<?php echo get_option($shortname.'_facebook_link',''); ?>" target="_blank">Facebook</a></li>
						<li><a href="<?php echo get_option($shortname.'_linkedin_link',''); ?>" target="_blank">Linkedin</a></li>
					</ul>
				</section>
				<section class="f-column f-column--inner">
					<h5 class="f-title">From the blog</h5>
					<ul class="f-menu">
						<?php
							$posts = get_posts( array(
								'numberposts'     => 3,
								'offset'          => 0,
								'category'        => '',
								'orderby'         => 'post_date',
								'order'           => 'DESC',
								'post_type'       => 'post',
								'post_status'     => 'publish'
							) );
							foreach($posts as $post){ setup_postdata($post);
						?>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
						<?php
							}
							wp_reset_postdata();
						?>
						<li><a href="<?php bloginfo('url'); ?>/blog">View all <i class="icon-right-small"></i></a></li>
					</ul>
				</section>
			</div><!--/f-column-->
		</div><!--/container-->
	</footer>

<!-- js files -->

<script src="<?php bloginfo('template_directory'); ?>/js/vendor/modernizr.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/app.min.js"></script>

<!-- other scripts -->
<?php wp_footer(); ?>

</body>
</html>
