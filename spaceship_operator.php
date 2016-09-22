<?php

echo "\n 3 <=> 3; // 0 :\n ";
echo 3 <=> 3; //0


echo "\n 2 <=> 3; // -1 :\n ";
echo 2 <=> 3; //0


echo "\n 3 <=> 2; // 1 :\n ";
echo 3 <=> 2; //0

//float
echo "\n 3.4 <=> 3.4; // 0 :\n ";
echo 3.4 <=> 3.4; //0

//string
echo "\n a <=> b; // -1 :\n ";
echo "a" <=> "b"; // -1

//array
echo "\n array: [1,2,3] <=> [1,1]; // 1 :\n ";
echo [1,2,3] <=> [1,1]; // -1

//array
echo "\n array: [1,2,3] <=> [1,2,4]; // -1 :\n ";
echo [1,2,3] <=> [1,2,4]; // -1

// old way to compare the difference

function intCompare(int $a, int $b):int
{
	return ($a < $b) ? -1 : (($a > $b) ? 1 : 0);
}

// new way to compare the difference


function intCompareNew(int $a, int $b):int
{
	return $a <=> $b;
}

echo "\n intCompare \n";
echo intCompare(2, 2);
echo "\n intCompareNew \n";
echo intCompareNew(2, 2);