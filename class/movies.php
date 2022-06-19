<?php
class Movie {
  private $title;
  private $genre;
  private $releaseDate;

  function __construct($_title, $_genre, $_releaseDate){
    $this->title = $_title;
    $this->genre = $_genre;
    $this->relaseDate = $_relaseDate;
  }

  // GETTER NB. 'return' !!!
  public function getTitle(){
    return $this->title = $_title;
  }
  
  public function getGenre(){
    return $this->genre = $_genre;
  }  

  public function getRelaseDate(){
    return $this->relaseDate = $_relaseDate;
  }

  // SETTER
  public function setRelaseDate(){
    if($this->relaseDate >= 2018){
      $releaseDate = 'latest releases';
    } else {
      $releaseDate = 'oldies';
    }
  }

}
$joker = new Movie('Joker', 'Drama', 2019);
$VforVendetta = new Movie('V for Vendetta', 'Action/Drama', 2005);
$tenet = new Movie('Tenet', 'Action', 2020);
$meetTheParents = new Movie('Meet the Parents', 'Comic', 2019);
?>