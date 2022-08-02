<?php
/**
 * Set, Validate & Update OTP Verification Email field.
 *
 * @package otp-verification-gateway
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'OTPVG_Send_Mail_On_Checkout' ) ) {
	/**
	 * Class OTPVG_Send_Mail_On_Checkout
	 */
	class OTPVG_Send_Mail_On_Checkout {

		/**
		 * Sends random generated OTP to customer.
		 *
		 * @param String $order_id Order's ID.
		 */
		public function send_otp_to_customer( $order_id ) {

			$test = new OVG_OTP_Processing();

			$to = get_post_meta( $order_id, 'Email_for_OTP', true );

			$subject = 'OTP for Verification for order #' . $order_id;

			$body = 'Your order\'s OTP for verification is: ' . get_post_meta( $order_id, 'OTP (Sent)', true );

			wp_mail( $to, $subject, $body, '' );
		}

	}
}
