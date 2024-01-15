
<?php
class Movie
{
  public $title;
  public $genre;
  public $duration;
  public $origin;


  public function __construct($_title , $_genre, $_duration, $_origin )
  {
    $this->title = $_title;
    $this->genre = $_genre;
    $this->duration = $_duration;
    $this->origin = $_origin;
    
  }

  public function DetDuration($_duration)
  //funzione che verifica la durata corrisponde a quella di un film, espressa in Minuti
  {

    if ($_duration >= 60) {
        $this->duration = $_duration;
    }
    else{
        echo " This is not a Movie, this is a Short Film";
    }
  }
}