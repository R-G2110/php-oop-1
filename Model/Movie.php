<?php

class Movie {
	public $title;
	public $desc;
	public $genre;
	public $rating;
	public $image;

	public function __construct(string $title, string $desc, string $genre, float $rating, Media $image = null)
	{
		$this->title = $title;
		$this->desc = $desc;
		$this->genre = $genre;
		$this->rating = $rating;
		$this->image = $image;
	}

	public function setImage(Media $image) {
		$this->image = $image;
	}
};