<?php
namespace pods {

	use pods\core\FieldSet;
	use pods\core\Podsifiable;

	/**
     *
     * Created by PhpStorm.
     * User: cha0tics
     * Date: 26.09.15
     * Time: 16:10
     */
	class Pod implements Podsifiable
    {
        protected $fieldSets = array();

        /**
         * Pod constructor.
         * @param
         */
        public function __construct()
        {

        }


        /**
         * @return FieldSet[]
         */
        public function getFieldSets()
        {
            return $this->fieldSets;
        }

        /**
         * @param FieldSet $fieldSet
         * @return int number of stored
         */
        public function addFieldSet(FieldSet $fieldSet)
        {
            return array_push($this->fieldSets, $fieldSet );
        }



    }
}