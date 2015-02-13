=== Favicon Links ===
Contributors: whyte624
Tags: favicon, link, a, href, url, google, image, decoration
Stable tag: trunk
Donate link: http://whyte624.ru
Requires at least: 4.0
Tested up to: 4.1
License: GPL2

Adds favicons to links in posts to give them nice look.

== Installation ==
1. Upload `favicon-links.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Description ==
The plugin adds favicons of websites to links which they lead to.
If a link has image inside (img tag), then favicon will not be added.

To suppress favicon for your link add 'data-no-favicon' attribute to the a tag:
<a href="http://example.com" target="_blank" data-no-favicon>my link</a>.

Uses Google S2 Favicon service.

Report issues or/and contribute here: https://github.com/whyte624/wordpress-favicon-links.

== Changelog ==
= 1.1 =
* Suppress warnings for wrong html markup
* Small padding after favicon for nicer look
* Suppress favicon for specific link

= 1.0 =
* Basic functionality

== Screenshots ==
1. Example of Favicon Links plugin output
2. Favicon Links plugin output

== Frequently Asked Questions ==

== Upgrade Notice ==