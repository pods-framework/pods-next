<?php
namespace pods\core {

	class Pod implements Podsifiable {
		protected $fieldSets = array();

		/**
		 * Pod constructor.
		 *
		 * @param
		 */
		private function __construct() {

		}


		/**
		 * @return FieldSet[]
		 */
		public function getFieldSets() {
			return $this->fieldSets;
		}

		/**
		 * @param FieldSet $fieldSet
		 *
		 * @return int number of stored
		 */
		public function addFieldSet( FieldSet $fieldSet ) {
			return array_push( $this->fieldSets, $fieldSet );
		}


	}
}