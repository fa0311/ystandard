<?php
/**
 * 記事フッター部分テンプレート
 *
 * @package ystandard
 * @author  yosiakatsuki
 * @license GPL-2.0+
 */

/**
 * 記事下広告
 */
ys_the_ad_entry_footer();

/**
 * SNSシェアボタン
 */
if ( ys_is_active_sns_share_on_footer() ) {
	ys_the_sns_share_button();
}

/**
 * 投稿者表示
 * TODO:ショートコード化
 */
if ( ys_is_display_author_data() ) : ?>
	<div class="entry__footer-author author--2col">
		<h2 class="entry__footer-title">この記事を書いた人</h2>
		<?php get_template_part( 'template-parts/parts/author-box' ); ?>
	</div><!-- .entry__footer-author -->
<?php
endif;

/**
 * コメントテンプレート
 *
 * @package ystandard
 * @author  yosiakatsuki
 * @license GPL-2.0+
 */

/**
 * TODO:ショートコード化
 */
if ( ! ys_is_amp() && ( comments_open() || get_comments_number() ) ) {
	comments_template();
}

/**
 * 関連記事
 */
get_template_part( 'template-parts/parts/post-related' );

/**
 * 前の記事・次の記事
 */
get_template_part( 'template-parts/parts/post-paging' );
