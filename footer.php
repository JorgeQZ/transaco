<footer>
		<div>
			<img class="logo-trans" src="<?php echo get_template_directory_uri() . '/img/logo-transaco.png' ?>" alt="">
		</div>
		<div class="contText">
			<div id="correo" class="footer-widget">
				<?php dynamic_sidebar('correo'); ?>
			</div>
		</div>
	</footer>
	<?php wp_footer();?>
</body>
</html>