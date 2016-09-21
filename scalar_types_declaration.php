<?php
/* news:
bool
float
int
string
*/
class Test
{
	public function get(int $a)
	{
		return $a;
	}
}

$Test = new Test;
echo $Test->get("test"); //