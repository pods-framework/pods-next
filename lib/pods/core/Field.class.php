<?php
namespace pods\core {

	abstract class Field implements FieldSetItem {

		private $name = '';

		/**
		 * @return string
		 */
		public function getName() {
			return $this->name;
		}

		/**
		 * @param string $name
		 */
		public function setName( $name ) {
			$this->name = $name;
		}


	}
}