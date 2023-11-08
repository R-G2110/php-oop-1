<?php 

trait YearPublished{
  public $published_year;
  public $aired_from_year;
  public $aired_to_year;

  public function getPublishedYear(){
    if(!empty($this->published_year)) {
      return "Anno d'uscita: ".$this->published_year;
    } else {
      return "Anno d'uscita: ".$this->aired_from_year." - ".$this->aired_to_year;
    }
  }
}
