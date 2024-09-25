<?php

/**
 * Configuration class for Mastodon Replies Importer
 *
 * @package MastodonRepliesImporter
 */

class Mastodon_Replies_Importer_Config {
	private static $instance = null;
	private $options;
	private $connection_options;

	private function __construct() {
		$this->options            = get_option( 'mastodon_replies_importer_settings', array() );
		$this->connection_options = get_option( 'mastodon_replies_importer_connection', array() );
	}

	public static function get_instance() {
		if ( self::$instance === null ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	public static function get( $key, $default = null ) {
		$instance = self::get_instance();
		return isset( $instance->options[$key] ) ? $instance->options[$key] : $default;
	}

	public function get_connection_option( $key, $default = null ) {
		$instance = self::get_instance();
		return isset( $instance->connection_options[$key] ) ? $instance->connection_options[$key] : $default;
	}

	public function set( $key, $value ) {
		$instance = self::get_instance();
		$instance->options[$key] = $value;
		update_option( 'mastodon_replies_importer_settings', $instance->options );
	}

	public function set_connection_option( $key, $value ) {
		$instance = self::get_instance();
		$instance->connection_options[$key] = $value;
		update_option( 'mastodon_replies_importer_connection', $instance->connection_options );
	}

	public function delete_connection() {
		delete_option( 'mastodon_replies_importer_connection' );
	}
}