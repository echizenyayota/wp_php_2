<?php
if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php
    // You can start editing here -- including this comment!
    if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
            $comments_number = get_comments_number();
            if ( '1' === $comments_number ) {
                /* translators: %s: post title */
                printf( '&ldquo;%s&rdquo;へのコメントが 1 件あります。', get_the_title() );
            } else {
                printf(
                    '&ldquo;%2$s&rdquo;へのコメントが %1$s 件あります。',
                    number_format_i18n( $comments_number ),
                    get_the_title()
                );
            }
            ?>
        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments( array(
                'avatar_size' => 100,
                'style'       => 'ol',
                'short_ping'  => true,
                'reply_text'  =>  '返信する',
            ) );
            ?>
        </ol>

        <?php the_comments_pagination( array(
                'prev_text' => '<span class="screen-reader-text">前へ</span>',
                'next_text' => '<span class="screen-reader-text">次へ</span>',
		) );

    endif; // Check for have_comments().

    if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

        <p class="no-comments">コメントは受け付けていません。</p>
    <?php
    endif;

    comment_form();
    ?>

</div><!-- #comments -->
