<?php
/**
 * 広告
 *
 * @package ystandard
 * @author yosiakatsuki
 * @license GPL-2.0+
 */

if ( ! function_exists( 'ys_get_ad_block_html' ) ) {
	/**
	 * 広告コードのhtml整形
	 *
	 * @param string $ad 広告.
	 *
	 * @return string
	 */
	function ys_get_ad_block_html( $ad ) {
		$html = '';
		$ad   = apply_filters( 'ys_advertisement_content', $ad );
		$ad   = ys_fix_ad_previw_error( $ad );
		if ( '' !== $ad && ! is_feed() ) {
			$label_text = apply_filters( 'ys_ad_label_text', 'スポンサーリンク' );
			$html       = sprintf(
				'<aside class="ad__container">
					<div class="ad__label">%s</div>
					<div class="ad__content">%s</div>
				</aside>',
				$label_text,
				$ad
			);
		}

		return apply_filters( 'ys_get_ad_block_html', $html );
	}
}

if ( ! function_exists( 'ys_get_ad_entry_header' ) ) {
	/**
	 * 記事上広告の取得
	 */
	function ys_get_ad_entry_header() {
		$key = 'ys_advertisement_before_content';
		if ( ys_is_mobile() ) {
			$key = 'ys_advertisement_before_content_sp';
		}
		if ( ys_is_amp() ) {
			$key = 'ys_amp_advertisement_before_content';
		}
		$ad = ys_get_option( $key );

		return apply_filters( 'ys_get_ad_entry_header', ys_get_ad_block_html( $ad ) );
	}
}
/**
 * 記事上部広告の出力
 */
function ys_the_ad_entry_header() {
	if ( ys_is_active_advertisement() ) {
		echo ys_get_ad_entry_header();
	}
}

if ( ! function_exists( 'ys_get_ad_more_tag' ) ) {
	/**
	 * Moreタグ広告の取得
	 */
	function ys_get_ad_more_tag() {
		$key = 'ys_advertisement_replace_more';
		if ( ys_is_mobile() ) {
			$key = 'ys_advertisement_replace_more_sp';
		}
		if ( ys_is_amp() ) {
			$key = 'ys_amp_advertisement_replace_more';
		}
		$ad = '';
		$ad = ys_get_option( $key );

		return apply_filters( 'ys_get_ad_more_tag', ys_get_ad_block_html( $ad ) );
	}
}
/**
 * Moreタグ広告の出力
 */
function ys_the_ad_more_tag() {
	if ( ys_is_active_advertisement() ) {
		echo ys_get_ad_more_tag();
	}
}

if ( ! function_exists( 'ys_get_ad_entry_footer' ) ) {
	/**
	 * 記事下広告の取得
	 */
	function ys_get_ad_entry_footer() {

		$key_left  = 'ys_advertisement_under_content_left';
		$key_right = 'ys_advertisement_under_content_right';

		if ( ys_is_mobile() ) {
			$key_left  = 'ys_advertisement_under_content_sp';
			$key_right = '';
		}
		if ( ys_is_amp() ) {
			$key_left  = 'ys_amp_advertisement_under_content';
			$key_right = '';
		}

		$ad       = '';
		$ad_left  = ys_get_option( $key_left );
		$ad_right = '';
		if ( '' !== $key_right ) {
			$ad_right = ys_get_option( $key_right );
		}
		if ( '' !== $ad_left && '' !== $ad_right ) {
			$ad = sprintf(
				'<div class="ad__double row">
					<div class="ad__left col__2--tb">%s</div>
					<div class="ad__right col__2--tb">%s</div>
				</div>',
				$ad_left,
				$ad_right
			);
		} else {
			if ( '' !== $ad_right ) {
				$ad = $ad_right;
			}
			if ( '' !== $ad_left ) {
				$ad = $ad_left;
			}
		}

		return apply_filters( 'ys_get_ad_entry_footer', ys_get_ad_block_html( $ad ) );
	}
}
/**
 * 記事下広告の出力
 */
function ys_the_ad_entry_footer() {
	if ( ys_is_active_advertisement() ) {
		echo ys_get_ad_entry_footer();
	}
}

/**
 * インフィード広告
 */
function ys_get_ad_infeed() {
	$ad = '';
	if ( ys_is_mobile() ) {
		$ad = ys_get_option( 'ys_advertisement_infeed_sp' );
	} else {
		$ad = ys_get_option( 'ys_advertisement_infeed_pc' );
	}
	$ad = ys_fix_ad_previw_error( $ad );

	return apply_filters( 'ys_get_ad_infeed', $ad );
}

/**
 * インフィード広告の表示
 */
function ys_the_ad_infeed() {
	echo ys_get_ad_infeed();
}

/**
 * インフィード広告の表示
 *
 * @param integer $num 記事番号.
 * @param string $template テンプレート名.
 */
function ys_get_template_ad_infeed( $num, $template ) {
	if ( ys_is_mobile() ) {
		$step  = ys_get_option( 'ys_advertisement_infeed_sp_step' );
		$limit = ys_get_option( 'ys_advertisement_infeed_sp_limit' );
	} else {
		$step  = ys_get_option( 'ys_advertisement_infeed_pc_step' );
		$limit = ys_get_option( 'ys_advertisement_infeed_pc_limit' );
	}
	if ( 0 == ( $num % $step ) && $limit >= ( $num / $step ) ) {
		if ( '' !== ys_get_ad_infeed() ) {
			get_template_part( 'template-parts/advertisement/infeed', $template );
		}
	}
}

/**
 * インフィード広告のプレビュー画面でのエラー対処
 *
 * @param  string $ad 広告コード.
 */
function ys_fix_ad_previw_error( $ad ) {
	if ( ! is_customize_preview() ) {
		return apply_filters( 'ys_fix_ad_infeed_error', $ad );
	}
	/**
	 * Google Adsense コード貼り付けでのエラー対処
	 */
	$adsense_script = '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>';
	if ( false !== strpos( $ad, $adsense_script ) ) {
		/**
		 * プレビューでのエラー対策
		 */
		$ad = str_replace( $adsense_script, '', $ad );
		wp_enqueue_script(
			'google-ads',
			'//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js',
			array(),
			false,
			true
		);
	}

	return apply_filters( 'ys_fix_ad_infeed_error', $ad );
}
