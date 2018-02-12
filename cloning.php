<?php

class CloneableClass
{
    private $_internalObject;

    public function __construct()
    {
        // instantiate the internal member
        $this->_internalObject = new stdClass();
		$a=serialize($this->_internalObject);
		"echo $a<br>";
    }

    // on clone, make a deep copy of this object by cloning internal member;
    public function __clone()
    {
        $this->_internalObject = clone $this->_internalObject;
		$a=serialize($this->_internalObject);
		echo "$a<br>";
    }
}

$obj=new CloneableClass();
$ob=clone $obj;