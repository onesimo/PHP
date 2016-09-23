<?php
require_once __DIR__."/vendor/autoload.php";
/*
use App\ClassA;
use App\ClassB;
use App\ClassC;
*/
use App\{
	ClassA,
	ClassB,
	ClassC as C
};


$a = new ClassA;
echo $a;

$a = new ClassB;
echo $a;

$a = new C;
echo $a;

/*
Old

use some\namespaces\ClassA;
use some\namespaces\ClassB;
use some\namespaces\ClassC as C;

use function some\namespace\fn_a;
use function some\namespace\fn_b;
use function some\namespace\fn_c;

use const some\namespace\ConstA;
use const some\namespace\ConstB;
use const some\namespace\ConstC;

PHP 7

use some\namespace\{
	ClassA,
	ClassB,
	ClassC as C

};

use function some\namespace\{fn_a, fn_b, fn_c};
use const some\namespace\{ConstA, ConstB, ConstC};

*/