<?php
declare(strict_types=1);
/* 
PHP7

bool
float
int
string
*/

function get(int $a)
{
	return $a;
}


echo get(1.2); // fatal error when you declare stric_types = 1