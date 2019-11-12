<?php
/**
 * 記事一覧テンプレート
 *
 * @package ystandard
 * @author  yosiakatsuki
 * @license GPL-2.0+
 */

?>
<div class="flex__col content__wrap">
	<main id="main" class="site-main content__main archive__main">
		<?php do_action( 'ys_site_main_prepend' ); ?>
		<?php
		/**
		 * アーカイブヘッダーの読み込み
		 */
		get_template_part( 'template-parts/archive/header' );
		?>
		<div class="flex flex--row">
			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part(
					'template-parts/archive/details',
					ys_get_archive_template_type()
				);
				/**
				 * インフィード広告
				 */
				ys_get_template_infeed_ad();
			endwhile;
			?>
		</div><!-- .archive__list -->
		<?php
		/**
		 * ページネーション
		 */
		get_template_part( 'template-parts/parts/pagination' );
		?>
		<?php do_action( 'ys_site_main_append' ); ?>
	</main><!-- .site-main -->
</div>