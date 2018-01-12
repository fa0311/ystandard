<?php
/**
 * yStandard設定取得
 */
if( ! function_exists( 'ys_get_options' ) ) {
	function ys_get_options() {
		global $ys_options;
		if( null !== $ys_options ) {
			return apply_filters( 'ys_get_options', $ys_options );
		}
		/**
		 * 配列作成
		 */
		$result = array(
			/**
			 * 基本設定
			 */
			// ロゴを出力しない
			'ys_logo_hidden' => get_option( 'ys_logo_hidden', 0 ),
			// キャッチフレーズを出力しない
			'ys_wp_hidden_blogdescription' => get_option( 'ys_wp_hidden_blogdescription', 0 ),
			// TOPページのmeta description
			'ys_wp_site_description' => get_option( 'ys_wp_site_description', '' ),
			/**
			 *
			 * [ys]SNS設定
			 *
			 */
			/**
			 * OGP
			 */
			// OGPメタタグを出力する
			'ys_ogp_enable' => get_option( 'ys_ogp_enable', 1 ),
			// Facebook app id
			'ys_ogp_fb_app_id' => esc_attr( get_option( 'ys_ogp_fb_app_id', '' ) ),
			// facebook admins
			'ys_ogp_fb_admins' => esc_attr( get_option( 'ys_ogp_fb_admins', '' ) ),
			// OGPデフォルト画像
			'ys_ogp_default_image' => get_option( 'ys_ogp_default_image', '' ),
			/**
			 * Twitterカード
			 */
			// Twitterカードを出力する
			'ys_twittercard_enable' => get_option( 'ys_twittercard_enable', 1 ),
			// Twitterカードのユーザー名
			'ys_twittercard_user' => esc_attr( get_option( 'ys_twittercard_user', '' ) ),
			// Twitterカード タイプ
			'ys_twittercard_type' => esc_attr( get_option( 'ys_twittercard_type', 'summary_large_image' ) ),

			/**
			 *
			 * [ys]SEO設定
			 *
			 */
			/**
			 * Google Analytics
			 */
			// Google Aanalytics トラッキングID
			'ys_ga_tracking_id' => esc_attr( get_option( 'ys_ga_tracking_id', '' ) ),
			// Google Aanalytics トラッキングコードタイプ
			'ys_ga_tracking_type' => esc_attr( get_option( 'ys_ga_tracking_type', 'gtag' ) ),
			// ログイン中はアクセス数をカウントしない
			'ys_ga_exclude_logged_in_user' => get_option( 'ys_ga_exclude_logged_in_user', 0 ),
			/**
			 *
			 * [ys]AMP設定
			 *
			 */
			// AMPページを有効化するか
			'ys_amp_enable' => get_option( 'ys_amp_enable', 0 ),
			// AMPのGoogle Analyticsトラッキングコード
			'ys_ga_tracking_id_amp' => esc_attr( get_option( 'ys_ga_tracking_id_amp', '' ) ),






				// タイトルの区切り文字
				'ys_title_separate' => esc_attr( get_option( 'ys_title_separate', '' ) ),
				// 発行年
				'ys_copyright_year' => ys_get_copyright_year_option(),


				//Tweetポタンを投稿上部に表示するか
				'ys_sns_share_on_entry_header' => get_option( 'ys_sns_share_on_entry_header', 0 ),
				//Tweetポタンを投稿下に表示するか
				'ys_sns_share_on_below_entry' => get_option( 'ys_sns_share_on_below_entry', 0 ),
				//Tweetポタンに via を出力するか
				'ys_sns_share_tweet_via' => get_option( 'ys_sns_share_tweet_via', 0 ),
				//Twitter via アカウント
				'ys_sns_share_tweet_via_account' => esc_attr( get_option( 'ys_sns_share_tweet_via_account', '' ) ),
				//Twitter related アカウント
				'ys_sns_share_tweet_related_account' => esc_attr( get_option( 'ys_sns_share_tweet_related_account', '' ) ),


				//モバイル表示でサイドバーを出力する
				'ys_show_sidebar_mobile' => get_option( 'ys_show_sidebar_mobile', 1 ),
				//絵文字を出力する
				'ys_show_emoji' => get_option( 'ys_show_emoji', 0 ),
				//oembedを出力する
				'ys_show_oembed' => get_option( 'ys_show_oembed', 0 ),
				//TwitterフォローURL
				'ys_follow_url_twitter' => esc_url( get_option( 'ys_follow_url_twitter', '' ) ),
				//facebookフォローURL
				'ys_follow_url_facebook' => esc_url( get_option( 'ys_follow_url_facebook', '' ) ),
				//google+フォローURL
				'ys_follow_url_googlepuls' => esc_url( get_option( 'ys_follow_url_googlepuls', '' ) ),
				//instagramフォローURL
				'ys_follow_url_instagram' => esc_url( get_option( 'ys_follow_url_instagram', '' ) ),
				//tumblrフォローURL
				'ys_follow_url_tumblr' => esc_url( get_option( 'ys_follow_url_tumblr', '' ) ),
				//YouTubeフォローURL
				'ys_follow_url_youtube' => esc_url( get_option( 'ys_follow_url_youtube', '' ) ),
				//GitHubフォローURL
				'ys_follow_url_github' => esc_url( get_option( 'ys_follow_url_github', '' ) ),
				//PinterestフォローURL
				'ys_follow_url_pinterest' => esc_url( get_option( 'ys_follow_url_pinterest', '' ) ),
				//linkedinフォローURL
				'ys_follow_url_linkedin' => esc_url( get_option( 'ys_follow_url_linkedin', '' ) ),
				//Twitterフォローリンク
				'ys_subscribe_url_twitter' => esc_url( get_option( 'ys_subscribe_url_twitter', '' ) ),
				//Facebookページフォローリンク
				'ys_subscribe_url_facebook' => esc_url( get_option( 'ys_subscribe_url_facebook', '' ) ),
				//Google＋ページフォローリンク
				'ys_subscribe_url_googleplus' => esc_url( get_option( 'ys_subscribe_url_googleplus', '' ) ),
				//Feedlyフォローリンク
				'ys_subscribe_url_feedly' => esc_url( get_option( 'ys_subscribe_url_feedly', '' ) ),
				//関連記事を出力する
				'ys_show_post_related' => get_option( 'ys_show_post_related', 1 ),
				//次の記事・前の記事を表示しない
				'ys_hide_post_paging' => get_option( 'ys_hide_post_paging', 0 ),
				//カテゴリー一覧をnoindexにする
				'ys_archive_noindex_category' => get_option( 'ys_archive_noindex_category', 0 ),
				//タグ一覧をnoindexにする
				'ys_archive_noindex_tag' => get_option( 'ys_archive_noindex_tag', 1 ),
				//投稿者一覧をnoindexにする
				'ys_archive_noindex_author' => get_option( 'ys_archive_noindex_author', 1 ),
				//日別一覧をnoindexにする
				'ys_archive_noindex_date' => get_option( 'ys_archive_noindex_date', 1 ),
				//広告　タイトル下
				'ys_advertisement_under_title' => get_option( 'ys_advertisement_under_title', '' ),
				//広告　moreタグ置換
				'ys_advertisement_replace_more' => get_option( 'ys_advertisement_replace_more', '' ),
				//広告　記事下　左
				'ys_advertisement_under_content_left' => get_option( 'ys_advertisement_under_content_left', '' ),
				//広告　記事下　右
				'ys_advertisement_under_content_right' => get_option( 'ys_advertisement_under_content_right', '' ),
				//広告　タイトル下 SP
				'ys_advertisement_under_title_sp' => get_option( 'ys_advertisement_under_title_sp', '' ),
				//広告　moreタグ置換 SP
				'ys_advertisement_replace_more_sp' => get_option( 'ys_advertisement_replace_more_sp', '' ) ,
				//広告　記事下 SP
				'ys_advertisement_under_content_sp' => get_option( 'ys_advertisement_under_content_sp', '' ),
				//個別ページでアイキャッチ画像を非表示にする
				'ys_hide_post_thumbnail' => get_option( 'ys_hide_post_thumbnail', 0 ),
				//テーマカスタマイザーの色設定を無効にする
				'ys_desabled_color_customizeser' => get_option( 'ys_desabled_color_customizeser', 0 ),
				//Twitter埋め込み用js読み込み
				'ys_load_script_twitter' => get_option( 'ys_load_script_twitter', 0 ),
				//Facebook埋め込み用js読み込み
				'ys_load_script_facebook' => get_option( 'ys_load_script_facebook', 0 ),
				//CDNにホストされているjQueryを読み込む（URLを設定）
				'ys_load_cdn_jquery_url' => esc_url( get_option( 'ys_load_cdn_jquery_url', '' ) ),
				//jQueryを読み込まない
				'ys_not_load_jquery' => get_option( 'ys_not_load_jquery', 0 ),


				//AMPのfacebookシェアボタン用App id
				'ys_amp_share_fb_app_id' => esc_attr( get_option('ys_amp_share_fb_app_id','') ),
				//通常ビューへのリンクを表示する
				'ys_amp_normal_link_share_btn' => get_option( 'ys_amp_normal_link', 1 ),
				//通常ビューへのリンクを表示する
				'ys_amp_normal_link' => get_option( 'ys_amp_normal_link_share_btn', 1 ),
				//scriptタグを削除してAMPページを作成
				'ys_amp_del_script' => get_option( 'ys_amp_del_script', 0 ),
				//インラインで書かれたstyle属性を削除してAMPページを作成
				'ys_amp_del_style' => get_option( 'ys_amp_del_style', 0 ),
				//AMPページで記事下ウィジェットを表示する
				'ys_show_entry_footer_widget_amp' => get_option( 'ys_show_entry_footer_widget_amp', 0 ),
				//広告　タイトル下
				'ys_amp_advertisement_under_title' => get_option( 'ys_amp_advertisement_under_title', '' ),
				//moreタグ置換
				'ys_amp_advertisement_replace_more' => get_option( 'ys_amp_advertisement_replace_more', '' ),
				//記事下　左
				'ys_amp_advertisement_under_content' => get_option( 'ys_amp_advertisement_under_content', '' )
			);

		return apply_filters( 'ys_get_options', $result );
	}
}

/**
 * 設定取得
 */
if ( ! function_exists( 'ys_get_option') ) {
	function ys_get_option( $name ) {
		$options = ys_get_options();
		return apply_filters( 'ys_get_option', $options[$name], $name );
	}
}

/**
 * 発行年の取得
 */
function ys_get_copyright_year_option() {
	$copyright_year = esc_attr( get_option( 'ys_copyright_year', date_i18n('Y') ) );
	return '' == $copyright_year ? date_i18n('Y') : $copyright_year;
}