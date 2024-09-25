<?php

/**
 * Configuration class for Mastodon Replies Importer
 *
 * @package MastodonRepliesImporter
 */

class Mastodon_Replies_Importer_Config {
	/**
	 * Instance of this class.
	 *
	 * @var Mastodon_Replies_Importer_Config
	 */
	private static $instance = null;

	/**
	 * Plugin options.
	 *
	 * @var array
	 */
	private $options;

	/**
	 * Connection options.
	 *
	 * @var array
	 */
	private $connection_options;

	/**
	 * Constructor.
	 */
	private function __construct() {
		$this->options            = get_option( 'mastodon_replies_importer_settings', array() );
		$this->connection_options = get_option( 'mastodon_replies_importer_connection', array() );
	}

	/**
	 * Get instance of this class.
	 *
	 * @return Mastodon_Replies_Importer_Config
	 */
	public static function get_instance() {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	/**
	 * Get a plugin option.
	 *
	 * @param string $key     Option key.
	 * @param mixed  $default Default value.
	 * @return mixed
	 */
	public static function get( $key, $default = null ) {
		$instance = self::get_instance();
		return isset( $instance->options[ $key ] ) ? $instance->options[ $key ] : $default;
	}

	/**
	 * Get a connection option.
	 *
	 * @param string $key     Option key.
	 * @param mixed  $default Default value.
	 * @return mixed
	 */
	public function get_connection_option( $key, $default = null ) {
		$instance = self::get_instance();
		return isset( $instance->connection_options[ $key ] ) ? $instance->connection_options[ $key ] : $default;
	}

	/**
	 * Set a plugin option.
	 *
	 * @param string $key   Option key.
	 * @param mixed  $value Option value.
	 */
	public function set( $key, $value ) {
		$instance = self::get_instance();
		$instance->options[ $key ] = $value;
		update_option( 'mastodon_replies_importer_settings', $instance->options );
	}

	/**
	 * Set a connection option.
	 *
	 * @param string $key   Option key.
	 * @param mixed  $value Option value.
	 */
	public function set_connection_option( $key, $value ) {
		$instance = self::get_instance();
		$instance->connection_options[ $key ] = $value;
		update_option( 'mastodon_replies_importer_connection', $instance->connection_options );
	}

	/**
	 * Delete connection options.
	 */
	public function delete_connection() {
		delete_option( 'mastodon_replies_importer_connection' );
	}
}