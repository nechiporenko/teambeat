<?php 
/*
 * Template Name: Blog Page
 * Description: Blog Page Template
 */
get_header(); ?>

<!-- Page Content Start -->
<div class="container" id="content" role="main">
	<main>
		<?php
			$temp = $wp_query; $wp_query= null;
			$wp_query = new WP_Query(); $wp_query->query('showposts=5' . '&paged='.$paged);
			while ($wp_query->have_posts()) : $wp_query->the_post();
		?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<h1><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', '_s' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			</header>
			<div class="entry-meta">
				By <?php the_author_posts_link(); ?> in <?php the_category(', '); ?>
			</div>
			<a href="<?php the_permalink(); ?>" class="post-thumbnail">
				<?php the_post_thumbnail( 'blog-img', 'class=full-width' ); ?>
			</a>
			<?php the_excerpt(); ?>
			<footer class="entry-footer">
				<a href="<?php the_permalink(); ?>" class="read-more">Read more</a>
			</footer>
		</article>
		<hr />

		<?php endwhile; ?>
		
		<nav class="pagination">
			<?php
				$args=array(
					'prev_text'    => __('Younger'),
					'next_text'    => __('Older'),
				);
				the_posts_pagination($args);
				wp_reset_query();
			?>
		</nav>
		<?php wp_reset_postdata(); ?>
	</main>

	<?php get_sidebar(); ?>

</div><!--/#content-->
<!-- /Page Content End -->

<?php get_footer(); ?>
