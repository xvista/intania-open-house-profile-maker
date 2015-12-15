<?php namespace quicksilver;

class TagParser {

	private static $instance;

	public $tag_container = array();

	public function __construct($asset_location = null) {
		if ( file_exists( $asset_location ) ) {
			$tag_content = file_get_contents( $asset_location );
			$this->tag_container = json_decode( $tag_content );
		}



	}

	public function __clone() {}

	public function __wakeup() {}

	public static function getInstance() {
		if (null === static::$instance) {
			static::$instance = new static('asset/tags.json');
		}

		return static::$instance;
	}

}
