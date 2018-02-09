<?php
/**
 *
 * ページネーション
 *
 */
if ( ! function_exists( 'ys_get_pagination' ) ) {
	function ys_get_pagination( $range = 1 ) {
		global $wp_query;
		$pagination = array();
		/**
		 * MAXページ数と現在ページ数を取得
		 */
		$total	 = isset( $wp_query->max_num_pages ) ? $wp_query->max_num_pages : 1;
		$current = get_query_var( 'paged' ) ? (int) get_query_var( 'paged' ) : 1;

		/**
		 * 全部で１ページなら出力しない
		 */
		if( 1 == $total ){
			return $pagination;
		}
		/**
		 * 前へリンク
		 */
		if( 1 < $current ){
			$pagination[] = ys_set_pagination_item(
												'<i class="fa fa-angle-left" aria-hidden="true"></i>',
												get_pagenum_link( $current - 1 )
											);
		}
		/**
		 * 1ページ目へリンク
		 */
		if( $range + 2 < $current ){
			$pagination[] = ys_set_pagination_item(
												'…',
												''
											);
			$pagination[] = ys_set_pagination_item(
												'1',
												get_pagenum_link( 1 )
											);
		}
		/**
		 * 各ページへのリンク作る
		 */
		for( $i = 1; $i <= $total; $i++ ){
			if( $current - $range <= $i && $i <= $current + $range ) {
				if( $i == $current ){
					$pagination[] = ys_set_pagination_item(
														$i,
														'',
														true
													);
				} else {
					$pagination[] = ys_set_pagination_item(
														$i,
														get_pagenum_link( $i )
													);
				}
			}
		}
		/**
		 * 最終ページへリンク
		 */
		if( $current + $range + 1 < $total ){
			$pagination[] = ys_set_pagination_item(
												'…',
												''
											);
			$pagination[] = ys_set_pagination_item(
												'1',
												get_pagenum_link( $total )
											);
		}
		/**
		 * 次ページへリンク
		 */
		if( $current < $total ){
			$pagination[] = ys_set_pagination_item(
												'<i class="fa fa-angle-right" aria-hidden="true"></i>',
												get_pagenum_link( $current + 1 )
											);
		}
		return apply_filters( 'ys_get_pagination', $pagination );
	}
}
/**
 * ページネーション用配列作成
 */
function ys_set_pagination_item( $text, $url, $current = false ) {
	$class = 'pagination__item';
	if( $current ) {
		$class .= ' pagination__item--current';
	}
	return array(
						'text' => $text,
						'url' => $url,
						'class' => $class
					);
}