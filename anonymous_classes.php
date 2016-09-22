<?php 
interface Logger
{
	public function log(string $msg);
}

class App
{
	private $logger;

	public function getLogger():Logger
	{
		return $this->logger;
	}

	public function setLogger(Logger $logger)
	{
		$this->logger = $logger;
	}
}
/* old way
class Logg implements Logger
{
	public function log(string $msg)
	{
		echo $msg;
	}
}

$app = new App;
$app->setLogger(new logg);

*/

// new way anonymous class
$app = new App;
$app->setLogger(new class implements Logger{
	public function log(string $msg)
	{
		echo $msg;
	}
});


var_dump($app->getLogger());

