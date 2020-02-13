=== WooCommerce Subscription Extras ===
Contributors: moiseh
Tags: woocommerce, subscriptions, subscription, bulk, price, edit, tool
Requires at least: 4.8
Tested up to: 5.2.3
Stable tag: 1.0.17
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Description ==

This plugin offers some extra facilities and missing features for the WooCommerce Subscriptions official extension.

Feel free to report bugs and provide new ideas.

[youtube https://youtu.be/v-USSaNHMxE ]

Free version features:

* Update all subscriptions (and taxes) when change the product price
* Recalculate all subscriptions when change related shipping methods
* Delay the Start date of specific subscription products

Premium version features:

* Batch AJAX processing for prices and taxes updates (useful to large amounts of subscriptions)
* Support for variable products (price detection per variation)

== Installation ==

1. Upload `woo-subscription-extras.zip` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. It's done. Now you can go to the Settings to configure what you want

== Screenshots ==

1. Question asked when product price that have active subscriptions change
2. Extra field added in product to change the start date of new subscription

== Changelog ==

= 1.0.1 =
* First release version

= 1.0.2 =
* Fixed bug in some cases SweetAlert not showing
* Fixed bug with comma separated decimal numbers
* Fixed bug with taxes calculations

= 1.0.3 =
* Better code organization and alert messages, fixing minor price change bugs
* Changed SweetAlert to normal WordPress notice as it causing unexpected bugs

= 1.0.4 =
* Added confirmation to end user to update subscriptions (confirm apply tax recalculations)
* Fixed decimals display when updating prices

= 1.0.5 =
* Added setting `Use inclusive Tax prices` for better control of taxes (beta)

= 1.0.6 =
* Introducing premium version
* Added subscription recalculation when change shippings methods

= 1.0.7 =
* Fix related bug to calculate inclusive tax prices

= 1.0.8 =
* Big refactoring in subscription prices and taxes calculation algorithms

= 1.0.9 =
* Added more solid flat rate shipping recalculations, supporting classes

= 1.0.10 =
* Rolled back to version 1.0.8 as there issues in shipping calculation reported by user

= 1.0.11 =
* Fixing bugs to recalculate prices when subscription quantity is greater than one
* Trying to fix reported PHP warnings and other small issues

= 1.0.12 =
* Fixed issue with shipping cost decimal

= 1.0.13 =
* Added initial support for variable subscriptions (beta)
* Added Synchronize prices action in product list

= 1.0.14 =
* Added new feature to delay the start date of subscription
* Updated WC tested up to tag

= 1.0.15 =
* Added support to update simple products with related subscriptions

= 1.0.16 =
* Updated WC tested up to tag
* Added compatibility with WooCommerce Admin
* Added support to calculate prices with coupons

= 1.0.17 =
* Emulating the correct customer when calculate shipping and taxes
* Optionally ignore customer taxes when calculate prices

== Frequently Asked Questions ==

= It's secure to let this plugin update my subscription prices? =

It's never guaranteed that something wrong and unexpected can happen with prices when update/synchronize the subscriptions for many different use cases and configurations. So always make sure you have a backup of the database before using this plugin.

= Why my subscription prices became $0 after update? =

This can happen in some situations where subscription looses the database integrity/relation with the original product or variation. So always make a backup before doing updates with this plugin.

= This plugin will calculate all the taxes, fees and shipping correctly? =

For common cases, yes, but there are some situations that it's technically difficult to handle, for example, shipping and/or taxes calculations that require very contextual information that it's difficult to reproduce when doing recalculations.

== Upgrade Notice ==
