<?php

class ClassA
{
	private $x = 1;

}

$getABC = function (){
	return $this->x;
};
/*
Old way

$getX = $getABC->bindTo(new ClassA, "ClassA");
echo $getX();

New way
*/

echo $getABC->call(new ClassA);