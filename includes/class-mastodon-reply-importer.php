<?php
/**
 * Main class for Mastodon Replies Importer
 *
 * @package MastodonRepliesImporter
 */

class MastodonReplyImporter {
	use Mastodon_Replies_Importer_Logger;
	private $admin_functions;
	/**
	 * Initialize the class and set its properties.
	 */
	public function __construct() {
		$this->admin_functions = new Mastodon_Replies_Importer_Admin();
	}

	/**
	 * Initialize the plugin.
	 */
	public function init() {
		add_action( 'admin_menu', array( $this->admin_functions, 'add_admin_menu' ) );
		add_action( 'admin_init', array( $this->admin_functions, 'settings_init' ) );
		add_action( 'admin_init', array( $this->admin_functions, 'handle_actions' ) );
		$this->admin_functions->init();
	}
}
