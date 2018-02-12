<?php

interface A{
	 function hello();
}

class B implements A{
		 function hello($var='this'){
				echo "$var is Boruto<br>";
		}
}

$obj=new B();
$obj->hello();

# Extendable Interfaces

interface C extends A{
	public function show();	
	}

class D implements A,C{
	function hello(){
		echo "This is it Nike<br>";
	}
	public function show(){
		echo "Naruto is better than Boruto<br>";
	}
}

$ob=new D();
$ob->hello();
$ob->show();