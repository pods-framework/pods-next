<?php
namespace pods\core {

    use pods\utils\html\HTMLType;

    /**
     * Created by PhpStorm.
     * User: cha0tics
     * Date: 23.09.15
     * Time: 13:29
     */
    abstract class Field
    {

        /**
         * Contains the type of the field to be displayed.
         *
         *
         * @var HTMLType
         */
        private $html_type =  null;

        private $name = '';

        /**
         * @return string
         */
        public function getName()
        {
            return $this->name;
        }

        /**
         * @param string $name
         */
        public function setName($name)
        {
            $this->name = $name;
        }

        /**
         * @return HTMLType
         */
        public function getHtmlType()
        {
            return $this->html_type;
        }

        /**
         * @param HTMLType $html_type
         * @return $this
         */
        public function setHtmlType(HTMLType $html_type)
        {
            $this->html_type = $html_type;
            return $this;
        }



        /**
         * The __toString method allows a class to decide how it will react when it is converted to a string.
         *
         * @return string
         * @link http://php.net/manual/en/language.oop5.magic.php#language.oop5.magic.tostring
         */
        public abstract function __toString();


    }
}