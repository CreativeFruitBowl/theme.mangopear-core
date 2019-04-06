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

	<section class="c-log-in__social">
		<header class="c-log-in__header">
			<h3 class="c-log-in__header__title">Quick sign in</h3>
			<p class="c-log-in__header__intro">Quickly &amp; securely sign in with your Google or Gmail account. You'll never need to remember your password for this site again!</p>
		</header><!-- /.c-log-in__header -->


		<a class="o-button  o-button--secondary  o-button--social-login" href="/wp-login.php?action=wordpress_social_authenticate&mode=login&provider=Google&redirect_to=<?php echo urlencode('https://' . $_SERVER[HTTP_HOST] . $_SERVER[REQUEST_URI]); ?>" rel="nofollow">
			<span class="o-button__text">Sign in with Google</span>
			<svg class="o-button__icon  o-button__icon--right" height="22" width="22" role="presentation"><use xlink:href="<?php echo MANGOPEAR_SPRITE; ?>#arrow--right"/></svg>
		</a>
	</section><!-- /.c-social-login -->