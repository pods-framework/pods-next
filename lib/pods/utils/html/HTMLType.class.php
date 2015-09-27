<?php
namespace pods\utils\html {

	/**
	 * Created by PhpStorm.
	 * User: cha0tics
	 * Date: 23.09.15
	 * Time: 13:36
	 */
	abstract class HTMLType {
		/**
		 * @var string
		 */
		private $openTag = null;

		/**
		 * @var string
		 */
		private $closingTag = null;

		/**
		 * @var HTMLTagAttributes
		 */
		private $tagAttributes = null;

		/**
		 * @param string $tag
		 * @param bool $isSingleTag
		 */
		function __construct( $tag, $isSingleTag = false ) {
			if ( false === $isSingleTag ) {
				$this->openTag    = '<' . $tag . '>';
				$this->closingTag = '</' . $tag . '>';
			} else {
				$this->openTag    = '<' . $tag . '/>';
				$this->closingTag = null;
			}
		}

		/**
		 * @return HTMLTagAttributes
		 */
		public function getTagAttributes() {
			return $this->tagAttributes;
		}

		/**
		 * @param HTMLTagAttributes $tagAttributes
		 */
		public function setTagAttributes( $tagAttributes ) {
			$this->tagAttributes = $tagAttributes;
		}

		/**
		 * This function will try to add the tag attribute. If the attribute already exists, it will be overwritten.
		 * That way there will be no duplicate attributes in any tag.
		 *
		 * @param $attrName
		 * @param $attrValue
		 *
		 * @return bool returns true when the attribute was successfully added, false if the attribute didn't exist
		 */
		public function setTagAttribute( $attrName, $attrValue ) {
			try {
				return $this->tagAttributes->addAttribute( $attrName, $attrValue );
			} catch ( \InvalidArgumentException $iae ) {
				return $this->tagAttributes->overwriteAttribute( $attrName, $attrValue );
			}
		}

		public function __toString() {
			// TODO: implement
		}
	}
}