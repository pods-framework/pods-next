<?php
namespace pods\utils\html {

	/**
	 * Class HTMLTagAttribute
	 * @package pods\utils\html
	 */
	class HTMLTagAttributes extends \ArrayObject {

		/**
		 *
		 */
		public function __construct() {
			// TODO: implement constructor
		}

		/**
		 * @param mixed $value
		 */
		public function append( $value ) {
			// TODO: Change the autogenerated stub, possibly return just false as we want more fine grained control by addAttribute() and overwriteAttribute()
		}

		/**
		 *
		 * @returns \ArrayIterator
		 */
		public function getIterator() {
			return parent::getIterator(); // TODO: Change the auto generated stub, maybe we want to return a custom iterator
		}


		/**
		 * @param String $attrName
		 * @param String $attrValue
		 *
		 * @throws \InvalidArgumentException when attribute is already set. Use overwriteAttribute() instead.
		 *
		 * @return bool
		 */
		public function addAttribute( $attrName, $attrValue ) {
			if ( isset( $this[ $attrName ] ) ) {
				throw new \InvalidArgumentException( 'This attribute is already assigned' );
			} else {
				$this[ $attrName ] = $attrValue;
			}

			return true;
		}

		/**
		 * Used to overwrite an existing attribute. If the attribute does not exist it will *not* be added.
		 *
		 * @param String $attrName
		 * @param String $attrValue
		 *
		 * @return bool returns true when the attribute was successfully overwritten, false if the attribute didn't exist
		 */
		public function overwriteAttribute( $attrName, $attrValue ) {
			if ( isset( $this[ $attrName ] ) ) {
				$this[ $attrName ] = $attrValue;

				return true;
			}

			return false;
		}
	}
}