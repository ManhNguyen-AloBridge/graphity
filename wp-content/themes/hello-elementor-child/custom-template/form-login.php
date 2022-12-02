<?php

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}
extract($args);

?>
<div class="hasu-section login-section mobile-hidden">
	<div class="hasu-auth-form">
		<p class="text-center">過去に当サイトで購入された方はこちらからログインしてください。</p>

		<?php if (!$loggedIn) : ?>

			<form class="woocommerce-form woocommerce-form-login login" method="post">

				<?php do_action('woocommerce_login_form_start'); ?>

				<div class="hasu-form-group inline-group text-bold woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="username" class="text-bold ">メールアドレス</label>
					<input type="text" class="hasu-form-input woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" value="<?php echo (!empty($_POST['username'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>" />
				</div>
				<?php // @codingStandardsIgnoreLine 
				?>
				<div class="hasu-form-group inline-group text-bold">
					<label for="password" class="text-bold ">パスワード</label>
					<input class="hasu-form-input" type="password" name="password" id="password" autocomplete="current-password" />
				</div>
				<?php do_action('woocommerce_login_form'); ?>

				<p class="woocommerce-LostPassword lost_password">
					<a href="<?php echo esc_url(wp_lostpassword_url()); ?>"><?php esc_html_e('パスワードを忘れた方はこちら', 'woocommerce'); ?></a>
				</p>

				<p class="form-row text-center">
					<?php wp_nonce_field('woocommerce-login', 'woocommerce-login-nonce'); ?>
					<button type="submit" class="hasu-button --dark --bg-dark " name="login" value="<?php esc_attr_e('Log in', 'woocommerce'); ?>"><?php esc_html_e('ログイン', 'woocommerce'); ?></button>
				</p>


			</form>

		<?php else : ?>
			<div class="text-center">
				<h3 class="hasu-section-title">
					<a href="<?php echo get_permalink(get_page_by_path('my-account')); ?>"><?php echo  sanitize_text_field($billing_furigana); ?></a>
				</h3>
				<p><a href="<?php echo wp_logout_url('http://10.0.15.30:8888/wordpress/?page_id=15'); ?>">ログアウト</a> </p>
			</div>
		<?php endif  ?>

	</div>
</div>