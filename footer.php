</main>
<footer class="footer">
	<div class="container">
		<div class="footer__wrapper">
			<div class="footer__logo">
				<?php the_custom_logo() ?>
				<p class="footer__description">
					ТВЭРС <br> Журнал о лампах ИКЕА
				</p>
			</div>
			<?php wp_nav_menu( [
				'theme_location' => 'footer_menu',
				'container' => 'div',
				'container_class' => 'footer__menu',
				'menu_class' => 'footer__menu-list' ] );
			?>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
<?php get_template_part( "template-parts/footer-analytics" ); ?>
</body>

</html>
