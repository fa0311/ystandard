
		</div><!-- .site-content -->

		<footer id="footer" class="site-footer" role="contentinfo">
			<div class="wrap">
				<?php if ( has_nav_menu( 'footer' ) ) : ?>
					<nav class="footer-navigation" role="navigation">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'footer',
								'menu_class'     => 'footer-menu',
								'depth'          => 1
							 ) );
						?>
					</nav><!-- .footer-navigation -->
				<?php endif; ?>

				<div class="site-info">
					<span class="copy">Copyright &copy; <?php echo date_i18n('Y') ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> All Rights Reserved.</span>
				</div><!-- .site-info -->
			</div><!-- .wrap -->
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php
	if(ys_is_amp()):
		// AMP
?>
<amp-sidebar id='sidebar' layout="nodisplay" side="right" class="amp-slider">
	<button class="menu-toggle-label" on='tap:sidebar.close'>
		<span class="top"></span>
		<span class="middle"></span>
		<span class="bottom"></span>
	</button>
	<nav id="site-navigation" class="main-navigation" role="navigation">
		<?php
			wp_nav_menu( array(
				'theme_location' => 'gloval',
				'menu_class'		 => 'gloval-menu',
				'container_class' => 'menu-global-container',
				'depth'          => 2
			 ) );
		?>
	</nav><!-- .main-navigation -->
</amp-sidebar>
<?php
	else:
		// AMP以外
		wp_footer();
	endif;
?>
</body>
</html>