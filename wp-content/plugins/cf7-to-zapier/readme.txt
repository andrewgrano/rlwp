=== CF7 to Zapier ===
Contributors: mariovalney, vizir
Donate link: https://github.com/Vizir/cf7-to-zapier
Tags: cf7, contact form, zapier, integration, contact form 7, webhook, vizir, mariovalney
Requires at least: 4.7
Tested up to: 4.9.2
Stable tag: 1.2.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Use Contact Form 7 as a trigger to Zapier!

== Description ==

[Contact Form 7 (CF7)](https://wordpress.org/plugins/contact-form-7/ "Install it first, of course") is a awesome plugin used by 1+ million WordPress websites.

[Zapier (Zapier)](https://zapier.com) is a awesome service to connect your apps and automate workflows!

Now you can join both: the best contact form plugin to WordPress and Zapier! Just activate and configure Zapier to receive data!

This plugin was created without any encouragement from Zapier or CF7 developers.

= How to Use =

Easily and quickly! Just activate "Contact Form 7" and "CF7 to Zapier" and go to Zapier to create your Zap!

= Configuration =

To integrate your form to Zapier you should:

1. Create a Zap.
1. Choose your trigger as "Webhooks" app (Screenshot 2).
1. Choose "Catch Hook" option (Screenshot 3).
1. Done! Now insert the URL given (Screenshot 4) into your Contact Form configuration and activate integration.

= Creating your workflow =

After configuration you can send one form to create a example data into Zapier dashboard. Then you can continue creating your workflow with filters and other apps.

= Translations =

You can [translate CF7 to Zapier](https://translate.wordpress.org/projects/wp-plugins/cf7-to-zapier) to your language.

= Review =

We would be grateful for a [review here](https://wordpress.org/support/plugin/cf7-to-zapier/reviews/).

= Support =

* Contact Form 7 - 5.0

== Installation ==

`Install [Contact Form 7](https://wordpress.org/plugins/contact-form-7/) and activate it.`

* Install "CF7 to Zapier" by plugins dashboard.

Or

* Upload the entire `cf7-to-zapier` folder to the `/wp-content/plugins/` directory.

Then

* Activate the plugin through the 'Plugins' menu in WordPress.

You will find 'Zapier' tab into form configuration.

== Frequently Asked Questions ==

= Does it works for forms sent out of CF7? =

Nope. The intention here is to integrate CF7 to Zapier (and another webhooks).

= Can I use it without Zapier? =

Yep. We are creating a integration to Zapier webhook, but you can insert any URL to receive a JSON formated data.

= Who are the developers? =

* [Vizir](http://vizir.com.br/en) is a Brazilian software studio.
* [Mário Valney](https://mariovalney.com/me) is a Brazilian developer who works at Vizir Software Studio and integrates the [WordPress community](https://profiles.wordpress.org/mariovalney).

= Can I help you? =

Yes! Visit [GitHub repository](https://github.com/Vizir/cf7-to-zapier).

== Screenshots ==

1. CF7 to Zapier configuration
2. Zapier Step 1 - Choosing you app trigger
3. Zapier Step 2 - Choosing Catch Hook option
4. Zapier Step 3 - Webhook URL (waiting for first data)

== Changelog ==

= 1.2.1 =

* Tested against Contact Form 7 version 5.0

= 1.2 =

* Added support to [PIPE](https://contactform7.com/selectable-recipient-with-pipes/) on CF7
* Tested against WP 4.9.2

= 1.1.1 =

* Fixed problem with a function inside empty() prior PHP 5.5

= 1.1 =

* Added the 'application/json' header by default to POST request
* Added 'ctz_post_request_args' filter to POST request args
* Tested against WP 4.9

= 1.0 =

* It's alive!
* Form configuration
* Integration to Zapier webhook
* Ignore or not CF7 mail sent

== Upgrade Notice ==

= 1.2.1 =

* Tested against Contact Form 7 version 5.0
