<?php
/**
 * ヘッダーテンプレート
 *
 * @package ystandard
 * @author  yosiakatsuki
 * @license GPL-2.0+
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head <?php ys_the_head_attr(); ?>>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="format-detection" content="telephone=no"/>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php do_action( 'ys_body_prepend' ); ?>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ystandard' ); ?></a>
	<header id="masthead" class="header site-header">
		<?php do_action( 'ys_site_header_prepend' ); ?>
		<div class="container">
			<div class="site-header__content">
				<?php
				/**
				 * サイトタイトル・ロゴの出力
				 */
				ys_get_template_part( 'template-parts/header/header-logo' );
				/**
				 * グローバルナビゲーション
				 */
				ys_get_template_part( 'template-parts/header/global-nav' );
				?>
			</div>
		</div>
		<?php do_action( 'ys_site_header_append' ); ?>
	</header>
	<?php do_action( 'ys_after_site_header' ); ?>
	<div id="content" class="site-content">
