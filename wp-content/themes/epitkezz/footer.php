	<section class="footer">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 logo-box">
					<img src="<?= the_field('lablec_logo','option');?>" alt="footer-logo">
				</div>
				<div class="col-xs-12 top-text">
					<?= the_field('lablec_felso_szoveg','option');?>
				</div>
				<div class="col-xs-12 col-sm-6 left-box">
					<?= the_field('lablec_bal_oldali_szoveg','option');?>
				</div>
				<div class="col-xs-12 col-sm-6 right-box">
					<?= the_field('lablec_jobb_oldali_szoveg','option');?>
				</div>
			</div>
		</div>
	</section>
	<section class="footer-bottom">

	</section>

	<?php wp_footer(); ?>

</body>

</html>
