<?php
/**
 * Created by PhpStorm.
 * User: cha0tics
 * Date: 9/27/15
 * Time: 11:54 AM
 */

namespace pods\utils\render {

    use pods\core\Field;
    use pods\core\FieldSet;
    use pods\core\Pod;

    class JSONRenderer implements Renderer
    {

        /**
         * Renders the output for a Pod object with all nested FieldSets.
         * Calls $this->renderFieldSet() for attached FieldSet
         *
         * @param Pod $pod
         */
        public static function renderPod(Pod $pod)
        {
            // TODO: Implement renderPod() method.
        }

        /**
         * Renders the output for a FieldSet and all nested FieldSetItems.
         * Calls itself recursively or $this->renderField() respectively.
         *
         * @param FieldSet $fieldSet
         */
        public static function renderFieldSet(FieldSet $fieldSet)
        {
            // TODO: Implement renderFieldSet() method.
        }

        /**
         * Renders the output for a Field.
         *
         * @param Field $field
         * @return mixed
         */
        public static function renderField(Field $field)
        {
            // TODO: Implement renderField() method.
        }
    }
}