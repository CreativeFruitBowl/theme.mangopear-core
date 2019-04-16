<?php

	/**
	 * Template partial: Footer
	 *
	 * @category 	Templates
	 * @package  	mangopear-core
	 * @author  	Andi North <andi@mangopear.co.uk>
	 * @copyright  	2018 Mangopear creative
	 * @license   	GNU General Public License <http://opensource.org/licenses/gpl-license.php>
	 * @version  	1.0.0
	 * @since   	1.0.0
	 */
	
?>


	<?php get_template_part('template-partials/footer-additions'); ?>


	<footer class="c-footer">
		<div class="o-container">
			<div class="o-grid">
				<div class="o-grid__item  u-one-third  u-lap--one-half  u-palm--one-whole">
					<div class="o-content-slot  o-content-slot--footer">
						<a href="https://mangopear.co.uk/contact/" class="o-content-slot__block-link">
							<h2 class="u-hide">Get your free consultation</h2>
							<p class="u-hide">With a free consultation from Mangopear creative, we can work together to ensure your marketing tools are working for you.</p>
						</a>
					</div><!-- /.o-content-slot -->
				</div><!-- /.o-grid__item -->





				<div class="o-grid__item  u-one-third  u-lap--one-half  u-palm--one-whole">
					<div class="c-footer__contact">
						<p class="c-footer__contact__item">
							<strong class="c-footer__contact__item-title">Call us on:</strong>
							07415 388 501
						</p>

						<p class="c-footer__contact__item">
							<strong class="c-footer__contact__item-title">Email us at:</strong>
							<a href="mailto:say.hi@mangopear.co.uk">say.hi@mangopear.co.uk</a>
						</p>

						<p class="c-footer__contact__item">
							<strong class="c-footer__contact__item-title">Write to us:</strong>
							Mangopear creative,
							<br>7 School Place,
							<br>3 Seaward Road,
							<br>Southampton,
							<br>Hampshire,
							<br>SO19 2HA
						</p>

						<div class="c-footer__contact__item">
							<strong class="c-footer__contact__item-title">Connect with us:</strong>
							<?php mangopear_component_social_navigation($nav_class = 'o-nav--contact-social', $size = 36, $fill = 'currentColor'); ?>
						</div>
					</div><!-- /.c-contact-details -->
				</div><!-- /.o-grid__item -->





				<div class="o-grid__item  u-one-third  u-portable--one-whole">
					<div class="c-footer-column">
						<nav class="o-nav  o-nav--legal">
							<h3 class="o-nav__title"><span class="o-nav__title-overflow">Useful links:</span></h3>
							<ul class="o-nav__list">
								<li class="o-nav__item"><a href="https://mangopear.co.uk/what-we-do/" class="o-nav__link">What we do</a></li>
								<li class="o-nav__item"><a href="https://mangopear.co.uk/our-work/" class="o-nav__link">Our work</a></li>
								<li class="o-nav__item"><a href="https://mangopear.co.uk/about/" class="o-nav__link">About us</a></li>
								<li class="o-nav__item"><a href="https://blog.mangopear.co.uk/" class="o-nav__link">Press &amp; latest news</a></li>
								<li class="o-nav__item"><a href="https://witterings.mangopear.co.uk/" class="o-nav__link">Witterings from Mangopear</a></li>
								<li class="o-nav__item"><a href="https://coding.mangopear.co.uk/" class="o-nav__link">Coding. A blog from Mangopear</a></li>
							</ul>


							<h3 class="o-nav__title"><span class="o-nav__title-overflow">Legal:</span></h3>
							<ul class="o-nav__list">
								<li class="o-nav__item"><a href="https://mangopear.co.uk/legal-stuff/terms-conditions/" class="o-nav__link">Terms &amp; conditions</a></li>
								<li class="o-nav__item"><a href="https://mangopear.co.uk/legal-stuff/privacy-policy/" class="o-nav__link">Privacy Policy</a></li>
								<li class="o-nav__item"><a href="https://mangopear.co.uk/legal-stuff/cookie-policy/" class="o-nav__link">Cookie Policy</a></li>
							</ul>
						</nav>


						<p class="c-copyright">&copy; Copyright <?php echo date('Y'); ?> to Mangopear Limited. <br>All rights reserved.</p>
					</div><!-- /.c-footer-column -->
				</div><!-- /.o-grid__item -->
			</div><!-- /.o-grid -->
		</div><!-- /.o-container -->
	</footer>





	<?php wp_footer(); ?>





	<!-- Web font loading -->
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js"></script>
	<script>
		WebFont.load({
			google: {
				families: ['PT+Serif:400,400i,700,700i']
			}
		});
	</script>


</body>
</html>