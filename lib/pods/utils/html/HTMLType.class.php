<?php
namespace pods\utils\html {
    /**
     * Created by PhpStorm.
     * User: cha0tics
     * Date: 23.09.15
     * Time: 13:36
     */
    abstract class HTMLType
    {
        /**
         * @var string
         */
        private $openTag = '';
        /**
         * @var null|string
         */
        private $closingTag = '';
        /**
         * @var array
         */
        private $tagAttributes = array();


        /**
         * @param String $tag
         * @param bool $isSingleTag
         */
        function __construct( $tag, $isSingleTag = false)
        {
            if ( false === $isSingleTag) {
                $this->openTag = '<' . $tag . '>';
                $this->closingTag = '</' . $tag . '>';
            } else {
                $this->openTag = '<' . $tag . '/>';
                $this->closingTag = null;
            }
        }


    }
}