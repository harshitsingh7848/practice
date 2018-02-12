<?php

class A{
	public $var=10;
	public $t="Hello World";
	
}

$onj=new A;

#$s=serialize($onj);

$s=__toString($onj);

$a=unserialize($s);



print_r($s);