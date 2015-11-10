	<aside class="sidebar">
		<?php $shortname = "teambeat"; ?>
		<form class="subscribe-form" id="subscribe" action="<?php echo get_option($shortname.'_mailchimp_action',''); ?>" method="GET">
			<div class="titile">
				<?php if(function_exists('show_text_block')) { echo show_text_block('subscribe-title', true); } ?>
			</div>
			<p>
				<?php if(function_exists('show_text_block')) { echo show_text_block('subscribe-text', true); } ?>
			</p>
			<input type="hidden" name="u" value="<?php echo get_option($shortname.'_mailchimp_u',''); ?>">
            <input type="hidden" name="id" value="<?php echo get_option($shortname.'_mailchimp_id',''); ?>">
			<input type="email" placeholder="Email address" class="full-width" name="MERGE0" id="MERGE0" required />
			<button type="submit" class="button-primary full-width">Subscribe</button>
		</form>
	</aside>
