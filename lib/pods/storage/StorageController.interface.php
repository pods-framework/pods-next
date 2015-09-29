<?php


namespace pods\storage {


	use pods\core\Field;
	use pods\core\FieldSet;
	use pods\core\Pod;

	interface StorageController {

		/**
		 * Stores Fields in the database.
		 *
		 * @param Field $field
		 *
		 * @return
		 */
		function storeField( Field $field );

		/**
		 * Stores FieldSets in the database.
		 * Calls $this->storeField() for any attached Fields
		 * Calls itself recursively for any nested FieldSets
		 *
		 * @param FieldSet $fieldSet
		 *
		 * @return
		 */
		public function storeFieldSet( FieldSet $fieldSet );

		/**
		 * Stores Pods in the database.
		 * Calls $this->storeFieldSet() for the attached FieldSet
		 *
		 * @param Pod $pod
		 *
		 * @return
		 */
		public function storePod( Pod $pod );

		/**
		 * retrieves all values of the Pods object, its related Pods
		 * and all Fields and FieldSets, ready to use.
		 *
		 * @param string $podId the ID of the Pod to load
		 *
		 * @return Pod the fully loaded Pod object
		 */
		public function loadPod( $podId );

		/**
		 * Loads Fields from the database.
		 *
		 * @param string $parentId the ID of the containing FieldSet
		 *
		 * @return FieldSet
		 */
		public function loadFields( $parentId );

		/**
		 * Loads FieldSets from the database.
		 * Calls $this->loadFields() to retrieve any attached Fields
		 * Calls itself recursively to retrieve any nested FieldSets
		 *
		 * @param string $parentId
		 * @param bool $parentIsPod set to true
		 *
		 * @return FieldSet
		 */
		public function loadFieldSet( $parentId, $parentIsPod = false );

	}
}