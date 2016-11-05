<div class="author-info clearfix">
	<?php
		$avatar = ys_image_get_the_user_avatar_img();
		if($avatar != ''):
	?>
	<figure class="author-avatar">
		<?php echo $avatar; ?>
	</figure><!-- .author-avatar -->
	<?php endif;  ?>

	<div class="author-description<?php echo $avatar !== '' ? ' show-avatar' : ''; ?>">
		<h2 class="author-title">
			<a class="author-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author"><?php ys_entry_the_entry_author(); ?></a>
		</h2>

		<div class="author-bio">
			<?php echo wpautop(str_replace(array("\r\n", "\r", "\n"),"\n\n",get_the_author_meta( 'description' ))); ?>
		</div><!-- .author-bio -->
	</div><!-- .author-description -->
</div><!-- .author-info -->