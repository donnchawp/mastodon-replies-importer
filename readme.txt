=== Mastodon Replies Importer ===
Contributors: Donncha O Caoimh
Tags: mastodon, comments, social media, import
Requires at least: 5.0
Tested up to: 6.6.2
Stable tag: 1.0
Requires PHP: 7.2
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Import replies from your Mastodon posts as comments on your WordPress blog.

== Description ==

The Mastodon Replies Importer plugin allows you to automatically import replies to your Mastodon posts as comments on your WordPress blog. This plugin bridges the gap between your Mastodon presence and your WordPress site, enabling a seamless integration of discussions across platforms.

Key features:

* Connect your WordPress site to your Mastodon account
* Automatically import Mastodon replies as WordPress comments
* Schedule imports on an hourly or daily basis
* Manually trigger imports when needed
* Maintain the conversation thread structure from Mastodon

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/mastodon-replies-importer` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress.
3. Use the Settings -> Mastodon Replies screen to configure the plugin.

== Frequently Asked Questions ==

= How do I connect my Mastodon account? =

Navigate to the plugin settings, enter your Mastodon instance URL, and click "Authorize with Mastodon". You'll be redirected to your Mastodon instance to approve the connection.

= How often are replies imported? =

You can choose between hourly and daily imports, or trigger a manual import at any time.

= Are all replies imported? =

The plugin imports public replies to your Mastodon posts that contain a link to your WordPress site. Private replies are not imported.

== Changelog ==

= 1.0 =
* Initial release

== Upgrade Notice ==

= 1.0 =
Initial release of the Mastodon Replies Importer plugin.