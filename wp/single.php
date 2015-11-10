<?php get_header('single'); ?>

<!-- Page Content Start -->
<?php
	if (have_posts()) :	while (have_posts()) : the_post();
?>
<div class="container post-image">
	<figure>
		<?php the_post_thumbnail( 'post-img', 'class=full-width' ); ?>
	</figure>
</div>
<div class="container" id="content" role="main">
	<main class="single-post">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header>
				<h1><?php the_title(); ?></h1>
				<div class="entry-meta">
					By <?php the_author_posts_link(); ?> in <?php the_category(', '); ?> on <?php the_date(); ?>
				</div>
				<div class="share-this">
					<?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>
					<?php
						$num_comments = get_comments_number();
						if ( comments_open() ) {
							if ( $num_comments == 0 ) {
								$comments = __('no comments');
							} elseif ( $num_comments > 1 ) {
								$comments = $num_comments . __(' comments');
							} else {
								$comments = __('1 comment');
							}
							$write_comments = '<a href="' . get_comments_link() .'" class="post-comments">'. $comments.'</a>';
						} else {
							$write_comments =  __('comments are off');
						}
						echo $write_comments;
					?>
				</div>
			</header>

			<?php the_content(); ?>


			<footer>
				<div class="share-this">
					<span class="text">Share with your followers&emsp;</span>
					<?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>
					<?php echo $write_comments; ?>
				</div>
				<nav class="post-tags">
					<?php the_tags('<i class="icon-tag"></i>&emsp;', '&emsp;'); ?>
				</nav>
				<hr />
				<div class="post-author">
					<figure class="avatar">
						<a href="#"><img src="http://placehold.it/75x75" alt="" /></a>
					</figure>
					<div class="description">
						<div class="name">
							<a href="#">Alex Potrivaev</a>
						</div>
						Pellentesque habitant morbi tristique senectus et netus et malesuada fames<br />
						<a href="#">@alexpotrivaev</a>
					</div>
				</div>
			</footer>
		</article>
		<hr />

		<div id="comments">
			<?php comments_template(); ?>
		</div>

		<?php
			endwhile;
			wp_reset_query();
			endif;
		?>
	</main>

	<?php get_sidebar(); ?>

</div><!--/#content-->
<!-- /Page Content End -->

<?php get_footer(); ?>
