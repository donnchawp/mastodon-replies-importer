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
		$this->admin_functions->init();
	}
}
