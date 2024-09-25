<?php
/**
 * Plugin Name: Mastodon Replies Importer
 * Plugin URI: https://odd.blog/mastodon-replies-importer/
 * Description: Imports replies from Mastodon as comments on WordPress posts.
 * Version: 1.0
 * Author: Your Name
 * Author URI: https://odd.blog/
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: mastodon-replies-importer
 * Domain Path: /languages
 *
 * @package MastodonRepliesImporter
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

// Define plugin constants.
define( 'MASTODON_REPLIES_IMPORTER_VERSION', '1.0.0' );
define( 'MASTODON_REPLIES_IMPORTER_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'MASTODON_REPLIES_IMPORTER_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Include necessary files.
require_once MASTODON_REPLIES_IMPORTER_PLUGIN_DIR . 'includes/debug.php';
require_once MASTODON_REPLIES_IMPORTER_PLUGIN_DIR . 'includes/config.php';
require_once MASTODON_REPLIES_IMPORTER_PLUGIN_DIR . 'includes/class-mastodon-reply-importer.php';
require_once MASTODON_REPLIES_IMPORTER_PLUGIN_DIR . 'includes/admin-functions.php';
require_once MASTODON_REPLIES_IMPORTER_PLUGIN_DIR . 'includes/api-functions.php';

// Initialize the plugin.
function mastodon_replies_importer_init() {
	$mastodon_reply_importer = new MastodonReplyImporter();
	$mastodon_reply_importer->init();
}
add_action( 'plugins_loaded', 'mastodon_replies_importer_init' );