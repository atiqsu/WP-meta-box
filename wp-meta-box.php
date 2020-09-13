<?php

namespace WP_Meta_Box;


class WP_Meta_Box {

	private $_meta_box;
	private $_prefix;
	private $_fields = [];

	protected $_base_path = '';


	public function __construct($meta_box, $txt_domain = '') {

		if(!is_admin()) {
			return;
		}

		$this->_meta_box = $meta_box;
		$this->_prefix   = (isset($meta_box['prefix'])) ? $meta_box['prefix'] : '';
		$this->_fields   = $this->_meta_box['fields'];




	}
}
