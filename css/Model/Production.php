<?php

class Production {

	use YearPublished;

	public $title;
	public $desc;
	public $genre;
	public $rating;
	public $image;

	public function __construct(string $title, string $desc, array $genre, float $rating, Media $image = null)
	{
		if(empty($title)){
			throw new Exception("Attenzione!!! Ci deve essere il titolo!");
		}else{
			$this->title = $title;
		}

		if(empty($genre)){
			throw new Exception("Attenzione!!! Ci deve essere almeno 1 tipo di genere!");
		}else{
			$this->genre = $genre;
		}
		
		$this->desc = $desc;
		$this->rating = $rating;
		$this->image = $image;
	}

	public function setImage(Media $image) {
		$this->image = $image;
	}
	
	public function addGenre($genreToAdd) {
		$this->genre[] = $genreToAdd;
	}

	public function removeGenre($genreToDelete) {
		$indexToDelete = array_search($genreToDelete, $this->genre);
		if($indexToDelete !== false){
			array_splice($this->genre, $indexToDelete, 1);
		}
	}

	public function getProductionInfo(){
    return "Durata: $this->running_time ";
  }

};