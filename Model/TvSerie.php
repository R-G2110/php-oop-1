<?php

class TvSerie extends Production {
	public $aired_from_year;
	public $aired_to_year;
	public $number_of_episodes;
	public $number_of_seasons;

	public function __construct(string $title, string $desc, array $genre, float $rating, Media $image = null, string $aired_from_year, string $aired_to_year, string $number_of_episodes, string $number_of_seasons){

    $this->aired_from_year = $aired_from_year;
    $this->aired_to_year = $aired_to_year;
    $this->number_of_episodes = $number_of_episodes;
    $this->number_of_seasons = $number_of_seasons;

    parent::__construct($title, $desc, $genre, $rating, $image);
  }
}