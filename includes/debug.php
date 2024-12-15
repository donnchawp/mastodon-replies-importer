<?php
/**
 * Logger trait for Mastodon Replies Importer
 *
 * @package MastodonRepliesImporter
 */

trait Mastodon_Replies_Importer_Logger {
    /**
     * Log debug messages.
     *
     * @param mixed $message The message to log.
     */
	public function debug_log( $message) {
		if ( Mastodon_Replies_Importer_Config::get( 'debug_mode' ) ) {
			error_log( $message ); // phpcs:ignore WordPress.PHP.DevelopmentFunctions.error_log_error_log
		}
	}

}