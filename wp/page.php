<?php get_header(); ?>

<!-- Page Content Start -->
<div class="container" id="content" role="main">
	<main>
		<?php
			if (have_posts()) :	while (have_posts()) : the_post();
		?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h1><?php the_title(); ?></h1>


			<?php the_content(); ?>


		</article>

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
