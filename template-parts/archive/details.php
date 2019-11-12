<?php
/**
 * 記事一覧 明細 リストタイプ
 *
 * @package ystandard
 * @author  yosiakatsuki
 * @license GPL-2.0+
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( ys_get_archive_post_class() ); ?>>
	<div class="flex flex--row -no-gutter -all">
		<div class="flex__col--1 flex__col--md-auto">
			<div class="item-list__img archive__image -list img-hover img-scale">
				<a href="<?php the_permalink(); ?>" class="ratio -r-4-3">
					<?php if ( has_post_thumbnail() ) : ?>
						<div class="ratio__item">
							<figure class="ratio__image">
								<?php
								the_post_thumbnail(
									'post-thumbnail',
									array(
										'class' => 'archive__image',
										'alt'   => get_the_title(),
									)
								);
								?>
							</figure>
						</div>
					<?php else : ?>
						<div class="archive__no-img ratio__item flex flex--c-c">
							<i class="far fa-image"></i>
						</div><!-- .entry-list__no-img -->
					<?php endif; ?>
				</a>
			</div>
		</div>
		<div class="flex__col archive__detail -list">
			<div class="archive__meta flex flex--j-between text-sub">
				<?php if ( ! empty( ys_get_the_category( 1, false ) ) ) : ?>
					<span class="archive__cat"><i class="far fa-folder icon-l"></i><?php ys_the_entry_category( false ); ?></span><!-- .entry-list__cat -->
				<?php endif; ?>
				<?php if ( ys_is_active_publish_date() ) : ?>
					<span class="archive__date"><i class="far fa-calendar icon-l"></i>
						<time class="updated" datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time( get_option( 'date_format' ) ); ?></time>
					</span><!-- .entry-list__date -->
				<?php endif; ?>
			</div>
			<?php
			the_title(
				'<h2 class="clear-h archive__detail-title -list"><a class="archive__link" href="' . get_the_permalink() . '">',
				'</a></h2>'
			);
			?>
			<div class="archive__meta text-sub">
				<?php the_excerpt(); ?>
			</div><!-- .entry-list__excerpt -->
		</div>
	</div>
</article><!-- #post-## -->