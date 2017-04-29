<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<time class="entry-date published"><?php the_date(); ?></time>
		<?php
		if ( is_single() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} else {
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		}
		?>
	</header><!-- .entry-header -->
	<?php if (has_post_thumbnail()) : ?>
		<div class="post-thumbnail">
			<?php
				$title_attribute = the_title_attribute('echo=0');
				the_post_thumbnail('post-thumbnail', array('alt' => $title_attribute) );
			?>
		</div><!-- .post-thumbnail -->
	<?php endif; ?>

	<div class="entry-content">
		<?php
		the_content();
		?>
	</div><!-- .entry-content -->
	<?php
	// ここはカスタムフィールドの節で取り上げます
	if ( is_single() && in_category('bookreview') ) :
	?>
		<table>
			<tr><td>書籍名</td><td><?php echo esc_html( get_post_meta( $post->ID, '書籍名', true ) ); ?></td></tr>
			<tr><td>出版社</td><td><?php echo esc_html( get_post_meta( $post->ID, '出版社', true ) ); ?></td></tr>
			<tr><td>著者</td><td><?php
				$authors = get_post_meta( $post->ID, '著者', false );
				echo esc_html( implode( ', ', $authors ));
			?></td></tr>
			<tr><td>価格</td><td><?php echo esc_html( get_post_meta( $post->ID, '価格', true ) ); ?>円</td></tr>
			<tr><td>読んだ日</td><td><?php echo esc_html( get_post_meta( $post->ID, '読んだ日', true ) ); ?></td></tr>
		</table>
	<?php
	endif;
	?>
	<?php
	// ここはget_postsの節で取り上げます
	if (is_single()) {
		$postid = get_the_ID();
		// $authorid = get_the_author_meta( 'ID' );
		$cat = get_the_category();

		$catarray = array();
		foreach ($cat as $data) {
			$catarray[] = $data->cat_ID;
		}

		$args = array(
			'posts_per_page' => 5,
			// 'author'         => $authorid,
			'category__in' => $catarray,
			'orderby'        => 'rand',
			'exclude'        => $postid,
		);

		$myposts = get_posts( $args );
		// var_dump($myposts);
		// exit;

		echo '<h3>同じカテゴリーの記事</h3>';
		if ($myposts) :
			echo '<ul>';
			foreach ($myposts as $post) :
				setup_postdata( $post ); ?>
				<li>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</li>
			<?php endforeach;
			wp_reset_postdata();
			echo '</ul>';
		else :
			echo '記事はありません';
		endif ;
	} // is_single()

	?>
	<footer class="entry-footer">
		<span class="cat-tags-links">
			<?php the_tags('<span class="tags-links">タグ: ',', ','</span>');?>
		</span>
	</footer>

</article><!-- #post-## -->
