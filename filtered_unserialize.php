<?php

class User
{
	public $name;
	public $email;

	public function __toString()
	{
		return "User: {$this->name}, Email: {$this->email}";
	}
}

class Blog
{
	public $title;
	public $description;

	public function __toString()
	{
		return "Blog: {$this->title}, Description: {$this->description}";
	}
}

$user = new User;
$user->name = "Onesimo";
$user->email = "onesimobatista@gmail.com";
//echo $user;

$blog = new Blog;
$blog->title = "SON";
$blog->description = "Programming Tips";
//echo $blog;

//file_put_contents("data.save", serialize([$user, $blog]));
$data = file_get_contents("data.save");
$data = unserialize($data, ["allowed_classes" => ["User"]]);

foreach ($data as $object) {
	if(is_object($object))
	echo $object;
}