<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bedrijf extends Model
{
    protected $table = 'bedrijven';

    public function publishers()
    {
        return $this->hasMany(Publisher::class);
    }
}