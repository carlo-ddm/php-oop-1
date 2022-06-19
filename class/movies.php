<?php
class Movie {
  private $title;
  private $genre;
  private $releaseDate;

  function __construct($_title, $_genre, $_releaseDate){
    $this->title = $_title;
    $this->genre = $_genre;
    $this->releaseDate = $_releaseDate;

    $this->setReleaseDate();
  }

  // GETTER NB. 'return' !!!
  public function getTitle(){
    return $this->title;
  }
  
  public function getGenre(){
    return $this->genre;
  }  

  public function getReleaseDate(){
    return $this->releaseDate;
  }

  // SETTER
  public function setReleaseDate(){
    if($this->releaseDate >= 2018){
      $releaseDate = 'latest releases';
    } else {
      $releaseDate = 'oldies';
    }
  }

}

?>