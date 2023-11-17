<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function episodes(){
        return $this->hasMany(Episode::class);
    }

    public function genres(){
        return $this->belongsToMany(Genre::class);

    }
}
