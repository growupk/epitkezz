<?php get_header(); ?>

	<?php if (have_posts()) : ?>

		<h2>Keresés eredménye:</h2>

		<?php //include (TEMPLATEPATH . '/inc/nav.php' ); ?>

		<?php while (have_posts()) : the_post(); ?>
			<?php
				$permalink = get_permalink( $post->ID );
				if( $permalink && preg_match("/houses\/[a-z]*.\/?!*$/", $permalink, $matches)){
			?>
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h3><a href="<?php echo get_permalink( $post->ID ); ?>"><?php the_title(); ?> <?php _e('Tipusterv','epitkezz')?></a></h3>

				<?php //include (TEMPLATEPATH . '/inc/meta.php' ); ?>

				<!-- <div class="entry"> -->

					<?php //the_excerpt(); ?>

				<!-- </div> -->
			</div>
			<?php
				}
			?>
		<?php endwhile; ?>

		<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

	<?php else : ?>
		<div class="search-null">
			<h2>Nincs találat a megadott keresési feltételre</h2>
		</div>

	<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
