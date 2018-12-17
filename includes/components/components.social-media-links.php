<?php

	/**
	 * Output our social media navigaton with a couple of options
	 *
	 * @category 	Theme output
	 * @package  	mangopear-core
	 * @author  	Andi North <andi@mangopear.co.uk>
	 * @copyright  	2018 Mangopear creative
	 * @license   	GNU General Public License <http://opensource.org/licenses/gpl-license.php>
	 * @version  	1.0.0
	 * @since   	1.0.0
	 */
	

	/**
	 * Parameters
	 *
	 * $nav_class		string 	Class to be outputted, for styling hooks
	 * $size 			integer	Size (unitless) to show the icons at, outputted on the <svg> element
	 * $fill 			string 	CSS colour to output in <svg> elements
	 */
	
	function mangopear_component_social_navigation($nav_class = 'o-nav--social', $size = 60, $fill = '#FFFFFF') {

?>


	<nav class="o-nav  o-nav--row  <?php echo $nav_class; ?>">
		<ul class="o-nav__list">
			<li class="o-nav__item  o-nav__item--twitter">
				<a title="Follow us on Twitter" href="https://twitter.com/MangopearUK" target="_blank" class="u-clearfix  o-nav__link">
					<svg viewBox="0 0 512 512" height="<?php echo $size; ?>" width="<?php echo $size; ?>" class="o-social-icon  o-social-icon--twitter">
						<path fill="<?php echo $fill; ?>" d="M419.6 168.6c-11.7 5.2-24.2 8.7-37.4 10.2 13.4-8.1 23.8-20.8 28.6-36 -12.6 7.5-26.5 12.9-41.3 15.8 -11.9-12.6-28.8-20.6-47.5-20.6 -42 0-72.9 39.2-63.4 79.9 -54.1-2.7-102.1-28.6-134.2-68 -17 29.2-8.8 67.5 20.1 86.9 -10.7-0.3-20.7-3.3-29.5-8.1 -0.7 30.2 20.9 58.4 52.2 64.6 -9.2 2.5-19.2 3.1-29.4 1.1 8.3 25.9 32.3 44.7 60.8 45.2 -27.4 21.4-61.8 31-96.4 27 28.8 18.5 63 29.2 99.8 29.2 120.8 0 189.1-102.1 185-193.6C399.9 193.1 410.9 181.7 419.6 168.6z"/>
					</svg>
				</a>
			</li>


			<li class="o-nav__item  o-nav__item--facebook">
				<a title="Like us on Facebook" href="https://www.facebook.com/MangopearUK" target="_blank" class="u-clearfix  o-nav__link">
					<svg viewBox="0 0 512 512" height="<?php echo $size; ?>" width="<?php echo $size; ?>" class="o-social-icon  o-social-icon--facebook">
						<path fill="<?php echo $fill; ?>" d="M211.9 197.4h-36.7v59.9h36.7V433.1h70.5V256.5h49.2l5.2-59.1h-54.4c0 0 0-22.1 0-33.7 0-13.9 2.8-19.5 16.3-19.5 10.9 0 38.2 0 38.2 0V82.9c0 0-40.2 0-48.8 0 -52.5 0-76.1 23.1-76.1 67.3C211.9 188.8 211.9 197.4 211.9 197.4z"/>
					</svg>
				</a>
			</li>


			<li class="o-nav__item  o-nav__item--google">
				<a title="Follow us on Google+" href="https://google.com/+AndiNorth" target="_blank" class="u-clearfix  o-nav__link">
					<svg viewBox="0 0 512 512" height="<?php echo $size; ?>" width="<?php echo $size; ?>" class="o-social-icon  o-social-icon--google">
						<path fill="<?php echo $fill; ?>" d="M416.6 179.9h-41.5v41.5h-20.8v-41.5h-41.5v-20.8h41.5v-41.5h20.8v41.5h41.5V179.9zM299.2 351.6c0 31.1-28.4 69-99.9 69 -52.3 0-95.9-22.5-95.9-60.5 0-29.3 18.5-67.3 105.1-67.3 -12.9-10.5-16-25.1-8.2-41 -50.7 0-76.7-29.8-76.7-67.7 0-37 27.5-70.7 83.7-70.7 14.2 0 90 0 90 0l-20.1 21.1h-23.6c16.7 9.5 25.5 29.2 25.5 50.9 0 19.9-11 36-26.6 48.1 -27.7 21.4-20.6 33.4 8.4 54.6C289.7 309.6 299.2 326.2 299.2 351.6zM243.1 186.8c-4.2-31.8-24.9-58-49.2-58.7 -24.3-0.7-40.5 23.7-36.3 55.5 4.2 31.8 27.2 54.1 51.5 54.8C233.3 239.1 247.3 218.6 243.1 186.8zM268.1 354.8c0-26.2-23.9-51.2-64-51.2 -36.1-0.4-66.8 22.8-66.8 49.8 0 27.5 26.1 50.4 62.2 50.4C245.8 403.7 268.1 382.2 268.1 354.8z"/>
					</svg>
				</a>
			</li>


			<li class="o-nav__item  o-nav__item--instagram">
				<a href="https://instagram.com/MangopearUK/" title="Follow us on Instagram" target="_blank" class="u-clearfix  o-nav__link">
					<svg viewBox="0 0 512 512" height="<?php echo $size; ?>" width="<?php echo $size; ?>" class="o-social-icon  o-social-icon--instagram">
						<path fill="<?php echo $fill; ?>" d="M365.3 234.1h-24.7c1.8 7 2.9 14.3 2.9 21.9 0 48.3-39.2 87.5-87.5 87.5 -48.3 0-87.5-39.2-87.5-87.5 0-7.6 1.1-14.9 2.9-21.9h-24.7V354.4c0 6 4.9 10.9 10.9 10.9H354.4c6 0 10.9-4.9 10.9-10.9V234.1H365.3zM365.3 157.6c0-6-4.9-10.9-10.9-10.9h-32.8c-6 0-10.9 4.9-10.9 10.9v32.8c0 6 4.9 10.9 10.9 10.9h32.8c6 0 10.9-4.9 10.9-10.9V157.6zM256 201.3c-30.2 0-54.7 24.5-54.7 54.7 0 30.2 24.5 54.7 54.7 54.7 30.2 0 54.7-24.5 54.7-54.7C310.7 225.8 286.2 201.3 256 201.3M365.3 398.1H146.7c-18.1 0-32.8-14.7-32.8-32.8V146.7c0-18.1 14.7-32.8 32.8-32.8h218.7c18.1 0 32.8 14.7 32.8 32.8v218.7C398.1 383.4 383.5 398.1 365.3 398.1"/>
					</svg>
				</a>
			</li>


			<li class="o-nav__item  o-nav__item--linkedin">
				<a title="Connect with us on LinkedIn" href="https://uk.linkedin.com/in/andinorth" target="_blank" class="u-clearfix  o-nav__link">
					<svg viewBox="0 0 512 512" height="<?php echo $size; ?>" width="<?php echo $size; ?>" class="o-social-icon  o-social-icon--linkedin">
						<path fill="<?php echo $fill; ?>" d="M186.4 142.4c0 19-15.3 34.5-34.2 34.5 -18.9 0-34.2-15.4-34.2-34.5 0-19 15.3-34.5 34.2-34.5C171.1 107.9 186.4 123.4 186.4 142.4zM181.4 201.3h-57.8V388.1h57.8V201.3zM273.8 201.3h-55.4V388.1h55.4c0 0 0-69.3 0-98 0-26.3 12.1-41.9 35.2-41.9 21.3 0 31.5 15 31.5 41.9 0 26.9 0 98 0 98h57.5c0 0 0-68.2 0-118.3 0-50-28.3-74.2-68-74.2 -39.6 0-56.3 30.9-56.3 30.9v-25.2H273.8z"/>
					</svg>
				</a>
			</li>


			<li class="o-nav__item  o-nav__item--github">
				<a title="View our work on Github" href="https://github.com/mangopearuk/" target="_blank" class="u-clearfix  o-nav__link">
					<svg viewBox="0 0 512 512" height="<?php echo $size; ?>" width="<?php echo $size; ?>" class="o-social-icon  o-social-icon--github">
						<path fill="<?php echo $fill; ?>" d="M256 70.7c-102.6 0-185.9 83.2-185.9 185.9 0 82.1 53.3 151.8 127.1 176.4 9.3 1.7 12.3-4 12.3-8.9V389.4c-51.7 11.3-62.5-21.9-62.5-21.9 -8.4-21.5-20.6-27.2-20.6-27.2 -16.9-11.5 1.3-11.3 1.3-11.3 18.7 1.3 28.5 19.2 28.5 19.2 16.6 28.4 43.5 20.2 54.1 15.4 1.7-12 6.5-20.2 11.8-24.9 -41.3-4.7-84.7-20.6-84.7-91.9 0-20.3 7.3-36.9 19.2-49.9 -1.9-4.7-8.3-23.6 1.8-49.2 0 0 15.6-5 51.1 19.1 14.8-4.1 30.7-6.2 46.5-6.3 15.8 0.1 31.7 2.1 46.6 6.3 35.5-24 51.1-19.1 51.1-19.1 10.1 25.6 3.8 44.5 1.8 49.2 11.9 13 19.1 29.6 19.1 49.9 0 71.4-43.5 87.1-84.9 91.7 6.7 5.8 12.8 17.1 12.8 34.4 0 24.9 0 44.9 0 51 0 4.9 3 10.7 12.4 8.9 73.8-24.6 127-94.3 127-176.4C441.9 153.9 358.6 70.7 256 70.7z"/>
					</svg>
				</a>
			</li>
		</ul>
	</nav>

<?php } ?>