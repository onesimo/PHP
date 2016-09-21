<?php

$php7 = function (String $title):array{
	return [
	$title."\n",
	"PHP on another leve",
	"more performance",
	"2x faster"
	];
};

foreach ($php7("news in PHP 7") as $k) {
	echo $k."\n";
}