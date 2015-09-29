<?php

namespace pods\storage\meta {

    use pods\core\Field;
    use pods\core\FieldSet;
    use pods\core\Pod;
    use pods\storage\StorageController;
    use pods\storage\WPCoreStorage;

    abstract class MetaStorage extends WPCoreStorage implements StorageController {
		/**
		 * @var string
		 */
		protected $callbackLoadFunction = '';

		/**
		 * @var string
		 */
		protected $callbackStoreFunction = '';

		/**
		 * @var \ArrayObject
		 */
		protected $callbackArgs = null;


		/**
		 * Stores Fields in the database.
		 *
		 * @param Field $field
		 *
		 * @return Field returns the field for call chaining
		 */
		public function storeField( Field $field ) {

			// TODO: Implement storeField() method.

		}

		/**
		 * retrieves all values of the Pods object, its related Pods
		 * and all Fields and FieldSets, ready to use.
		 *
		 * @param string $podId the ID of the Pod to load
		 *
		 * @return Pod the fully loaded Pod object
		 */
		public function loadPod( $podId ) {
			// TODO: Implement loadPod() method.
		}

		/**
		 * Loads Fields from the database.
		 *
		 * @param string $parentId the ID of the containing FieldSet
		 *
		 * @return FieldSet
		 */
		public function loadFields( $parentId ) {
			// TODO: Implement loadFields() method.
		}

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
		public function loadFieldSet( $parentId, $parentIsPod = false ) {
			// TODO: Implement loadFieldSet() method.
		}

		/**
		 * Stores FieldSets in the database.
		 * Calls $this->storeField() for any attached Fields
		 * Calls itself recursively for any nested FieldSets
		 *
		 * @param FieldSet $fieldSet
		 *
		 * @return FieldSet returns the FieldSet for call chaining
		 */
		public function storeFieldSet( FieldSet $fieldSet ) {
			// TODO: Implement storeFieldSet() method.
		}

		/**
		 * Stores Pods in the database.
		 * Calls $this->storeFieldSet() for the attached FieldSet
		 *
		 * @param Pod $pod
		 *
		 * @return Pod returns the Pod for call chaining
		 */
		public function storePod( Pod $pod ) {
			// TODO: Implement storePod() method.
		}


		/**
		 * This function sets the WordPress specific callback
		 * for its purpose
		 *
		 * @param $callbackHandler
		 *
		 * @return void
		 */
		public abstract function setCallbackStoreHandler( $callbackHandler );

		/**
		 * This function sets the WordPress specific callback
		 * for its purpose
		 *
		 * @param $callbackHandler
		 *
		 * @return void
		 */
		public abstract function setCallbackLoadHandler( $callbackHandler );


	}
}