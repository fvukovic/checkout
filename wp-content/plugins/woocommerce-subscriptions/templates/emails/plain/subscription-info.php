<?php
/**
 * Subscription information template
 *
 * @author  Brent Shepherd / Chuck Mac
 * @package WooCommerce_Subscriptions/Templates/Emails
 * @version 2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! empty( $subscriptions ) ) {

	echo "\n\n" .  __( 'Abonnementinformationen', 'woocommerce-subscriptions' ) . "\n\n";
	foreach ( $subscriptions as $subscription ) {
		// translators: placeholder is subscription's number
		echo sprintf( _x( 'Abonnement: %s',' in einfachen E-Mails für Abonnementinformationen', 'woocommerce-subscriptions' ), $subscription->get_order_number() ) . "\n";
		// translators: placeholder is either view or edit url for the subscription
		echo sprintf( _x( 'Abonnement anzeigen: %s ',' in einfachen E-Mails für Abonnementinformationen', 'woocommerce-subscriptions' ), $is_admin_email ? wcs_get_edit_post_link( $subscription->get_id() ) : $subscription->get_view_order_url() ) . "\n";
		// translators: placeholder is localised start date
		echo sprintf( _x( 'Startdatum: %s',' in einfachen E-Mails für Abonnementinformationen', 'woocommerce-subscriptions' ), date_i18n( wc_date_format(), $subscription->get_time( 'start_date', 'site' ) ) ) . "\n";

		$end_date = ( 0 < $subscription->get_time( 'end' ) ) ? date_i18n( wc_date_format(), $subscription->get_time( 'end', 'site' ) ) : _x( 'When Cancelled', 'Used as end date for an indefinite subscription', 'woocommerce-subscriptions' );
		// translators: placeholder is localised end date, or "when cancelled"
		echo sprintf( _x( 'Enddatum: %s',' in einfachen E-Mails für Abonnementinformationen', 'woocommerce-subscriptions' ), $end_date ) . "\n";
		// translators: placeholder is the formatted order total for the subscription
		echo sprintf( _x( 'Preis: %s',' in einfachen E-Mails für Abonnementinformationen', 'woocommerce-subscriptions' ), $subscription->get_formatted_order_total() );
		echo "\n\n";
	}
}
