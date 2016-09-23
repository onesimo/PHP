<?php
Interface MyPackageThrowable extends Throwable
{

}

class MyPackageException extends Error implements MyPackageThrowable
{

}

function add(int $left, int $right){
	if($left < 0){
		throw new MyPackageException("Left < 0");
	}
}

try{
	echo add(-1,5);
}catch(Exception $e){
	echo "Exception ".$e->getMessage();
}catch(Error $e){
	echo "Error ".$e->getMessage();
}

/*
Interface Throwable
Exception Implements Throwable
Error implements Throwable (replaces engineException)
Error type extends Error
ParseError extends Error
*/