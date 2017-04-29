<?php get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'content' );

				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

				the_post_navigation( array(
					'prev_text' => '&lt;&lt; %title',
					'next_text' => '%title &gt;&gt;',
				) );

			endwhile;

			?>
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar( 'single' ); ?>
</div><!-- .wrap -->

<?php get_footer();
