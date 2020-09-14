<?php

namespace WP_Meta_Box\Traits;


/**
 * Trait for making singleton instance
 *
 * @package WP_Meta_Box\Traits
 */
trait Singleton {

	private static $instance;

	public static function instance() {
		if(!self::$instance) {
			self::$instance = new static();
		}

		return self::$instance;
	}
}