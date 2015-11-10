	<footer id="site-footer">
		<div class="container">
			<div class="row">
				<nav class="one-third column">
					<span class="title-h2">Support</span>
					<?php $shortname = "teambeat"; ?>
					<ul class="bottom-menu">
						<li><a href="/contacts">Contact us</a></li>
						<li><a href="<?php echo get_option($shortname.'_twitter_link',''); ?>">Twitter</a></li>
						<li><a href="<?php echo get_option($shortname.'_facebook_link',''); ?>">Facebook</a></li>
					</ul>
				</nav>
				<div class="two-thirds column">
					<span class="title-h2">About</span>
					<p><?php if(function_exists('show_text_block')) { echo show_text_block('about', true); } ?></p>
				</div>
			</div>
		</div>
	</footer>

<!-- js files -->

<script src="<?php bloginfo('template_directory'); ?>/js/vendor/modernizr.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/app.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/subscribe.js"></script>

<!-- other scripts -->
<?php wp_footer(); ?>

</body>
</html>
