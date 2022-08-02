<?php
/**
 * Generate Random 6-Digit OTP to customer.
 *
 * @package otp-verification-gateway
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'OTPVG_OTP_Processing' ) ) {

	/**
	 * Class OTPVG_OTP_Processing
	 */
	class OTPVG_OTP_Processing {

		/**
		 * Returning OTP
		 *
		 * @return int $rand;
		 */
		public function generate_otp() {
			$rand = '';

			for ( $i = 0; $i < 6; $i++ ) {
				$rand .= wp_rand( 0, 9 );
			}
			return $rand;
		}

	}

}
