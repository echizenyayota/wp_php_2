<?php
if ( ! function_exists( 'sampletheme_setup' ) ) :
	function sampletheme_setup() {
		add_editor_style( array( 'assets/css/editor-style.css' ) );

		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 2000, 1200, true );

		register_nav_menus( array(
			'top'    => 'トップメニュー',
		) );

		add_theme_support( 'html5', array(
			'comment-form', 'comment-list', 'gallery', 'caption',
		) );

		add_theme_support( 'custom-header', array(
			'default-image'      => get_theme_file_uri( '/assets/images/topimage.png' ),
			'width'              => 2000,
			'height'             => 1200,
			'flex-height'        => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'sampletheme_setup' );

if ( ! isset( $content_width ) ) {
	$content_width = 700;
}

function sampletheme_scripts() {
	wp_enqueue_style( 'sampletheme-style', get_stylesheet_uri() );

	wp_enqueue_style( 'sampletheme-ie8', get_theme_file_uri( '/assets/css/ie8.css' ), array( 'sampletheme-style' ), '1.0' );
	wp_style_add_data( 'sampletheme-ie8', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'sampletheme-skip-link-focus-fix', get_theme_file_uri( '/assets/js/skip-link-focus-fix.js' ), array(), '1.0', true );
	wp_enqueue_script( 'sampletheme-navigation', get_theme_file_uri( '/assets/js/navigation.js' ), array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'sampletheme-global', get_theme_file_uri( '/assets/js/global.js' ), array( 'jquery' ), '1.0', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sampletheme_scripts' );


// body_classに追加するクラス設定。
function sampletheme_body_classes( $classes ) {
	if ( has_header_image() ) {
		$classes[] = 'has-header-image';
	}

	if ( is_active_sidebar( 'sidebar-1' ) && ! is_page() ) {
		$classes[] = 'has-sidebar';
	}
	return $classes;
}
add_filter( 'body_class', 'sampletheme_body_classes' );



// サイドバーの節で説明
function sampletheme_widgets_init() {
	register_sidebar( array(
		'name'          => 'サイドバー',
		'id'            => 'sidebar-1',
		'description'   => 'サイドバーに表示されるウィジェット',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'フッター1',
		'id'            => 'footer-1',
		'description'   => 'フッターに表示されるウィジェット',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'フッター2',
		'id'            => 'footer-2',
		'description'   => 'フッターに表示されるウィジェット',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => '個別投稿サイドバー',
		'id'            => 'sidebar-2',
		'description'   => '個別投稿サイドバーに表示されるウィジェット',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'sampletheme_widgets_init' );
