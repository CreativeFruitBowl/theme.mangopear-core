<?php

	/**
	 * [Partial] Account > Log in form
	 *
	 * A form to show to logged out users when they need to sign in. Often paired with
	 * `/account/form--social-login.php`.
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

	<section class="c-log-in__form">
		<header class="c-log-in__header">
			<h3 class="c-log-in__header__title">Log in now</h3>
			<p class="c-log-in__header__intro">Log in with your email address and password. If you can't remember your password you can <a href="/wp-login.php?action=lostpassword">easily reset it</a>.</p>
		</header><!-- /.c-log-in__header -->


		<div class="o-form  o-form--log-in">
			<form name="loginform" id="loginform" method="post" action="/wp-login.php">
				<?php if (isset($_GET['redirect_to'])) : ?>
					<input type="hidden" name="redirect_to" value="<?php echo $_GET['redirect_to']; ?>"/>
				<?php else : ?>
					<input type="hidden" name="redirect_to" value="<?php echo get_site_url(); ?>"/>
				<?php endif; ?>


				<div class="frm_form_field">
					<label for="user_login" class="o-form__label">Email address: <span class="frm_required">*</span></label>
					<input type="text" id="user_login" name="log" value="">
				</div><!-- /.frm_form_field -->


				<div class="frm_form_field">
					<label for="user_pass" class="o-form__label">Password: <span class="frm_required">*</span></label>
					<input type="password" id="user_pass" name="pwd" value="">
				</div><!-- /.frm_form_field -->


				<div class="frm_form_field">
					<label for="rememberme" class="o-form__label">Stay logged in?</label>


					<div class="c-faux-check">
						<input class="u-hide  c-faux-check__input" type="checkbox" id="rememberme" name="rememberme" value="forever">

						<label class="c-faux-check__label  c-checkout__account-check__label" for="rememberme">
							<span class="c-faux-check__field"><svg class="c-faux-check__field__asset" height="30" width="30" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php echo MANGOPEAR_SPRITE; ?>#tick"></use></svg></span>
							<span class="c-faux-check__label__text">Keep me logged in</span>
						</label>
					</div><!-- /.c-faux-check -->
				</div><!-- /.frm_form_field -->


				<div class="frm_submit">
					<button class="o-button  o-button--primary" type="submit">
						<span class="o-button__text">Log in</span>
						<svg class="o-button__icon  o-button__icon--right" height="22" width="22" role="presentation"><use xlink:href="<?php echo MANGOPEAR_SPRITE; ?>#arrow--right"/></svg>
					</button>


					<a href="/wp-login.php?action=lostpassword" class="o-button  o-button--tertiary">
						<span class="o-button__text">Reset password</span>
						<svg class="o-button__icon  o-button__icon--right" height="22" width="22" role="presentation"><use xlink:href="<?php echo MANGOPEAR_SPRITE; ?>#arrow--right"/></svg>
					</a>
				</div><!-- /.frm_submit -->
			</form>
		</div><!-- /.o-form -->
	</section><!-- /.c-social-login -->