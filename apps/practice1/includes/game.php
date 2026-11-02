<?php

class Game {
    public $title;
    public $releaseDate;
    public $cover;

     public function __construct($title, $releaseDate,$cover) {
        $this->title = $title;
        $this->releaseDate = $releaseDate;
        $this->cover = $cover;
    }

    public function releaseDateFormatted(){
        return date("F j, Y", $this->releaseDate);        
    }
}

?>
