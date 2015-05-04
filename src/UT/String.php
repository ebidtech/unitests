<?php

namespace UT;

class String
{
    /**
     * contains the internal data
     *
     * @var string
     */
    var $data;

    /**
     * @param $data
     */
    function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Creates a deep copy of the string object
     *
     * @return String
     */
    function copy()
    {
        $ret = new String($this->data);

        return $ret;
    }

    /**
     * Adds another string object to this class
     *
     * @param String $str String to add
     */
    function add(String $str)
    {
        $this->data = $this->data . $str->toString("%s");
    }

    /**
     * Returns the formated string
     *
     * @param $format
     *
     * @return string
     */
    function toString($format)
    {
        $ret = sprintf($format, $this->data);

        return $ret;
    }
}
