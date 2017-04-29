<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header" role="banner">
		<div class="custom-header">
			<div class="custom-header-media">
				<?php the_custom_header_markup(); ?>
			</div>
			<div class="site-branding">
				<div class="wrap">
					<div class="site-branding-text">
						<p class="site-title">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?>
								<img src="<?php echo esc_url( get_theme_file_uri( '/images/top.png' ) ); ?>" alt="<?php bloginfo( 'name' ); ?>">
							</a>
						</p>
						<?php $description = get_bloginfo( 'description', 'display' );
						if ( $description ) : ?>
							<p class="site-description"><?php bloginfo( 'description'); ?></p>
						<?php endif; ?>
					</div><!-- .site-branding-text -->

				</div><!-- .wrap -->
			</div><!-- .site-branding -->

		</div><!-- .custom-header -->
		<?php //ナビゲーションのコード ?>
		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="トップメニュー">
					<?php //スマートフォン用のボタンをJavaScriptで作成（本書内では解説していません） ?>
						<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false"><svg class="icon icon-bars" aria-hidden="true" role="img"> <use href="#icon-bars" xlink:href="#icon-bars"></use> </svg><svg class="icon icon-close" aria-hidden="true" role="img"> <use href="#icon-close" xlink:href="#icon-close"></use> </svg>メニュー</button>
						<?php wp_nav_menu( array(
							'theme_location'  => 'top',
							'container_class' => 'menu-container',
							'menu_id'         => 'top-menu',
							'link_before' => '>'
						) ); ?>
					</nav><!-- #site-navigation -->
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>
		</header><!-- #masthead -->
		<div class="site-content-contain">
			<div id="content" class="site-content">
