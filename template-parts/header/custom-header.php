<?php
/**
 * カスタムヘッダーテンプレート
 *
 * @package ystandard
 * @author  yosiakatsuki
 * @license GPL-2.0+
 */

if ( ! ys_is_active_custom_header() ) {
	return;
}
?>
<div class="custom-header is-<?php echo esc_attr( ys_get_custom_header_type() ); ?>">
	<?php ys_the_custom_header_markup(); ?>
</div>
