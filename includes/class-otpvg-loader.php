<?php
/**
 * Main Loader
 *
 * @package otp-verification-gateway
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'OTPVG_Loader' ) ) {
	/**
	 * Class OTPVG_Loader
	 */
	class OTPVG_Loader {

		/**
		 *  Constructor.
		 */
		public function __construct() {
			$this->includes();
		}

		/**
		 * Includes files depends on user
		 */
		public function includes() {
			include 'class-otpvg-woocommerce-gateway.php';
			include 'class-otpvg-send-mail-on-checkout.php';
			include 'class-otpvg-otp-processing.php';
			include 'class-otpvg-check-otp.php';
			include 'class-otpvg-redirect-to-checkout.php';
		}
	}

	new OTPVG_Loader();
}

