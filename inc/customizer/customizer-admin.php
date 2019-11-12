<?php
/**
 * サイト運営支援
 *
 * @package ystandard
 * @author  yosiakatsuki
 * @license GPL-2.0+
 */

/**
 * サイト運営支援
 *
 * @param WP_Customize_Manager $wp_customize wp_customize.
 */
function ys_customizer_admin( $wp_customize ) {
	/**
	 * パネルの追加
	 */
	$wp_customize->add_panel(
		'ys_customizer_panel_admin',
		array(
			'title'           => '[ys]サイト運営支援',
			'priority'        => 1500,
			'description'     => 'サイト管理画面内の機能設定',
			'active_callback' => array(),
		)
	);
	/**
	 * サイト運営支援
	 */
	ys_customizer_add_admin( $wp_customize );
}

/**
 * サイト運営支援
 *
 * @param WP_Customize_Manager $wp_customize wp_customize.
 */
function ys_customizer_add_admin( $wp_customize ) {
	$ys_customizer = new YS_Customizer( $wp_customize );
	/**
	 * セクション追加
	 */
	$ys_customizer->add_section(
		array(
			'section'  => 'ys_customizer_section_admin_editor',
			'title'    => 'エディター設定',
			'priority' => 1,
			'panel'    => 'ys_customizer_panel_admin',
		)
	);
	/**
	 * Gutenberg用CSSの追加
	 */
	$ys_customizer->add_label(
		array(
			'id'          => 'ys_admin_enable_block_editor_style_label',
			'label'       => 'ブロックエディター用CSSの追加',
			'description' => '※Gutenbergで有効な設定です。',
		)
	);
	$ys_customizer->add_checkbox(
		array(
			'id'        => 'ys_admin_enable_block_editor_style',
			'default'   => ys_get_option_default( 'ys_admin_enable_block_editor_style', 1 ),
			'transport' => 'postMessage',
			'label'     => 'ブロックエディター用CSSを追加する',
		)
	);
	/**
	 * ビジュアルエディタ用CSSの追加
	 */
	$ys_customizer->add_label(
		array(
			'id'          => 'ys_admin_enable_tiny_mce_style_label',
			'label'       => 'ビジュアルエディター用CSSの追加',
			'description' => '※クラシックエディターで有効な設定です。<br>※ビジュアルエディターとテキストエディターの切り替えができなくなる等問題がある場合はチェックを外してください。',
		)
	);
	$ys_customizer->add_checkbox(
		array(
			'id'        => 'ys_admin_enable_tiny_mce_style',
			'default'   => 1,
			'transport' => 'postMessage',
			'label'     => 'ビジュアルエディター用CSSを追加する',
		)
	);

}
