<?php
/**
 * クラス読み込み
 */
require_once get_template_directory() . '/inc/classes/widgets/class.ys-ad-text-widget.php';
require_once get_template_directory() . '/inc/classes/widgets/class.ys-ranking-widget.php';
require_once get_template_directory() . '/inc/classes/class.ys-enqueue.php';

/**
 *
 * 機能読み込み
 *
 */

/**
 * 変数
 */
require_once get_template_directory() . '/inc/variables/variables.php';
/**
 * 設定
 */
require_once get_template_directory() . '/inc/option/option.php';
/**
 * utilities
 */
require_once get_template_directory() . '/inc/util/util.php';
/**
 * 投稿タイプ
 */
require_once get_template_directory() . '/inc/post-type/post-type.php';
/**
 * 条件分岐
 */
require_once get_template_directory() . '/inc/conditional-branch/conditional-branch.php';
/**
 * 初期化
 */
require_once get_template_directory() . '/inc/init/init.php';
/**
 * enqueue
 */
require_once get_template_directory() . '/inc/enqueue/enqueue.php';
/**
 * post-meta
 */
require_once get_template_directory() . '/inc/post-meta/post-meta.php';
/**
 * テーマカスタマイザー
 */
require_once get_template_directory() . '/inc/customizer/customizer.php';
/**
 * アーカイブ
 */
require_once get_template_directory() . '/inc/archive/archive.php';
/**
 * <head>
 */
require_once get_template_directory() . '/inc/head/head.php';
/**
 * ヘッダー
 */
require_once get_template_directory() . '/inc/header/header.php';
/**
 * フッター
 */
require_once get_template_directory() . '/inc/footer/footer-sns.php';

/**
 * AMP
 */
require_once get_template_directory() . '/inc/amp/amp-head.php';
require_once get_template_directory() . '/inc/amp/amp-google-analytics.php';



// utilities
require_once get_template_directory() . '/inc/utilities.php';



// フィルタ関連
require_once get_template_directory() . '/inc/extras.php';
//簡易VPカウント
require_once get_template_directory() . '/inc/viewcount.php';
//投稿表示関連
require_once get_template_directory() . '/inc/template-tags.php';
// コメント欄
require_once get_template_directory() . '/inc/custom-comment.php';
// ページネーション
require_once get_template_directory() . '/inc/pagination.php';
// パンくずリスト
require_once get_template_directory() . '/inc/breadcrumb.php';
// ウィジェット
require_once get_template_directory() . '/inc/widgets.php';
// ショートコード
require_once get_template_directory() . '/inc/shortcode.php';




// 管理画面メニュー
if( is_admin() ){
	require_once get_template_directory() . '/inc/theme-option/theme-option-add.php';
	require_once get_template_directory() . '/library/theme-update-checker/theme-update-checker.php';
	// 管理画面関連
	require_once get_template_directory() . '/inc/admin.php';
}


/**
 * v2でいずれ廃止予定
 */
//設定
require_once get_template_directory() . '/inc/migration-v1-v2/v1/theme-settings.php';