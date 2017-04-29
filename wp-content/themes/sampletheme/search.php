<?php get_header(); ?>
<div class="wrap">
	<header class="page-header">
		<h1 class="page-title">「<span><?php the_search_query();?></span>」で検索した結果</h1>
	</header><!-- .page-header -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				get_template_part( 'content' );
			endwhile;
			the_posts_pagination( array(
				'prev_text' => '&larr;',
				'next_text' => '&rarr;',
			) );
		else : ?>
			<p>お探しの記事は見つかりませんでした。</p>
			<?php get_search_form();?>
		<?php endif;
		$cat_id = get_cat_ID( get_search_query() );
		if( $cat_id ) :
			$category_link = get_category_link( $cat_id );
			?>
			<hr>
			<p>このブログには、カテゴリー「<?php the_search_query();?>」があります。<a href="<?php echo esc_url( $category_link ); ?>">&raquo;カテゴリー「<?php the_search_query();?>」の記事一覧へ</a></p>
		<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->
<?php get_footer();