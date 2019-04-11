<?php

	/**
	 * [Partial] Account > Social login buttons
	 *
	 * Show social media log in buttons. Often paired with
	 * `/account/form--log-in.php`.
	 *
	 * @category 	Core WordPress template files
	 * @package  	mangopear-core
	 * @author  	Andi North <andi@mangopear.co.uk>
	 * @copyright  	2018 Mangopear creative
	 * @license   	GNU General Public License <http://opensource.org/licenses/gpl-license.php>
	 * @version  	1.0.0
	 * @since   	1.0.0
	 */
	
?>

	<div class="c-log-in">
		<h2 class="c-log-in__title">Log in to your account</h2>


		<?php get_template_part('template-partials/account/form--social-login'); ?>
		<?php get_template_part('template-partials/account/form--log-in'); ?>
	</div>