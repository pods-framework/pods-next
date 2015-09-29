<?php
/**
 * Created by PhpStorm.
 * User: cha0tics
 * Date: 26.09.15
 * Time: 17:24
 */

namespace pods\core;


class TextField extends Field {
	protected $text = '';

	/**
	 * TextField constructor.
	 *
	 * @param $text
	 */
	public function __construct( String $name, String $text ) {
		$this->text = $text;
	}

	/**
	 * The __toString method allows a class to decide how it will react when it is converted to a string.
	 *
	 * @return string
	 * @link http://php.net/manual/en/language.oop5.magic.php#language.oop5.magic.tostring
	 */
	function __toString() {
		// TODO: Implement __toString() method.
	}


}