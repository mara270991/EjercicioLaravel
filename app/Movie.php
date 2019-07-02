<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function getTitleAndRating(){
      $movie = $this->title . '' . $this->rating;
      return $movie;
    }
}
