<?php

class Movie extends Production {
	public $published_year;
	public $running_time;

	public function __construct(string $title, string $desc, array $genre, float $rating, Media $image = null, string $published_year, string $running_time){
    $this->published_year = $published_year;
    $this->running_time = $running_time;

    parent::__construct($title, $desc, $genre, $rating, $image);
  }
}