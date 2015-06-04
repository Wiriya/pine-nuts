<?php
/**
 * @package Pine nuts
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<br>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<div class="divider"></div>
		<br>
		<div class="entry-meta">
			<?php pine_nuts_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->


	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'pine-nuts' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php pine_nuts_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	<br>
</article><!-- #post-## -->
