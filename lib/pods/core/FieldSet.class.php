<?php
namespace pods\core {

    /**
     * Created by PhpStorm.
     * User: cha0tics
     * Date: 26.09.15
     * Time: 16:15
     */

    class FieldSet
    {
        /**
         * @var []FieldSet
         */
        protected $fieldSets = array();

        /**
         * @var []Field
         */
        protected $fields = array();

        /**
         * @return FieldSet
         */
        public function getFieldSets()
        {
            return $this->fieldSets;
        }

        /**
         * @param FieldSet $fieldSet
         *
         * @return int number
         */
        public function addFieldSet($fieldSet)
        {
            return array_push($this->fieldSets, $fieldSet );
        }

        /**
         * @return Field[] all fields currently assigned to this Fieldset
         */
        public function getFields()
        {
            return $this->fields;
        }

        /**
         * @param Field $field
         * @return int number of total field after adding a field
         */
        public function addField(Field $field)
        {
            return array_push($this->fields,$field);
        }

        /**
         * @return int number of fields in the field set (does not include nested Fields)
         */
        public function countFields(){
            $numberOfFields = count($this->fields);
            return $numberOfFields;
        }


    }
}