<?php
namespace pods\utils\html {

    /**
     * Class HTMLTagAttribute
     * @package pods\utils\html
     */
    class HTMLTagAttribute
    {
        /**
         * @var array
         */
        private $attributes = array();


        public function __construct()
        {

        }

        /**
         * @param String $attrName
         * @param String $attrValue
         */
        public function addAttribute( $attrName,  $attrValue){
            $this->attributes[$attrName] = $attrValue;
        }
    }
}