	<?php get_sidebar( 'footer' ); ?>

	<div id="footer-bottom">
		<div class="container clearfix">
			<?php
				$menu_class = 'bottom-nav';
				$footerNav = '';

				if ( function_exists( 'wp_nav_menu' ) ) $footerNav = wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menu_class, 'echo' => false, 'depth' => '1' ) );
				if ( '' == $footerNav ) show_page_menu( $menu_class );
				else echo( $footerNav );
			?>
			
			
			<p id="copyright">
			<span>Desenvolvido por </span>	
			<a href="http://www.acens.com.br" title="Desenvolvido por Acens">
				<img src="http://localhost/semine/wp-content/uploads/2013/08/logo-pequena.png" alt="Acens Empresa Júnior" />
			</a>
			</p>



		</div> <!-- end .container -->
	</div> <!-- end #footer-bottom -->

	<?php wp_footer(); ?>
</body>
</html>