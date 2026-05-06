<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
   public function publishers()
{
    return $this->belongsToMany(Publisher::class);
}

}

