<?php

namespace pods\storage\table {

    use pods\core\Field;
    use pods\core\FieldSet;
    use pods\core\Pod;
    use pods\storage\StorageController;
    use pods\storage\WPCoreStorage;

    abstract class TableStorage extends WPCoreStorage implements StorageController
    {
        /**
         * Stores Fields in the database.
         * @param Field $field
         * @return
         */
        function storeField(Field $field)
        {
            // TODO: Implement storeField() method.
        }

        /**
         * Stores FieldSets in the database.
         * Calls $this->storeField() for any attached Fields
         * Calls itself recursively for any nested FieldSets
         * @param FieldSet $fieldSet
         * @return
         */
        public function storeFieldSet(FieldSet $fieldSet)
        {
            // TODO: Implement storeFieldSet() method.
        }

        /**
         * Stores Pods in the database.
         * Calls $this->storeFieldSet() for the attached FieldSet
         * @param Pod $pod
         * @return
         */
        public function storePod(Pod $pod)
        {
            // TODO: Implement storePod() method.
        }

        /**
         * retrieves all values of the Pods object, its related Pods
         * and all Fields and FieldSets, ready to use.
         * @param string $podId the ID of the Pod to load
         * @return Pod the fully loaded Pod object
         */
        public function loadPod($podId)
        {
            // TODO: Implement loadPod() method.
        }

        /**
         * Loads Fields from the database.
         * @param string $parentId the ID of the containing FieldSet
         * @return FieldSet
         */
        public function loadFields($parentId)
        {
            // TODO: Implement loadFields() method.
        }

        /**
         * Loads FieldSets from the database.
         * Calls $this->loadFields() to retrieve any attached Fields
         * Calls itself recursively to retrieve any nested FieldSets
         * @param string $parentId
         * @param bool $parentIsPod set to true
         * @return FieldSet
         */
        public function loadFieldSet($parentId, $parentIsPod = false)
        {
            // TODO: Implement loadFieldSet() method.
        }


        // TODO add db storage specific methods, maybe as abstract
    }
}