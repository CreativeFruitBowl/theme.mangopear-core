<?php

	/**
	 * [Block] Testimonial
	 *
	 * @category 	gutenberg
	 * @package  	mangopear-core
	 * @author  	Andi North <andi@mangopear.co.uk>
	 * @copyright  	2019 Mangopear creative
	 * @license   	GNU General Public License <http://opensource.org/licenses/gpl-license.php>
	 * @version  	1.0.0
	 * @since   	1.0.0
	 */
	

	$align_class = $block['align'] ? 'u-align--' . $block['align'] : '';
	
?>

	<blockquote class="c-testimonial  <?php echo $align_class; ?>">
		<div class="o-container">
			<div class="c-testimonial__content  u-larger-text">
				<?php the_field('testimonial'); ?>
			</div>


			<footer class="c-testimonial__footer">
				<cite class="c-testimonial__person"><?php the_field('testimonial__person-name'); ?></cite> 
				<span class="c-testimonial__from">from</span>
				<cite class="c-testimonial__company"><?php the_field('testimonial__company-name'); ?></cite>
			</footer>
		</div><!-- /.o-container -->
	</blockquote>