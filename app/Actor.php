<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
  public function getFullName(){
    $TheActor = $this->first_name . ' ' . $this->last_name;
    return $TheActor;
  }
}
