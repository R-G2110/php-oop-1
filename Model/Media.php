<?php

class Media {
	public $filename;
	public $name;
	public $type = "image";

	public function __construct($filename, $name)
	{
		$this->filename = $filename;
		$this->name = $name;
	}
}