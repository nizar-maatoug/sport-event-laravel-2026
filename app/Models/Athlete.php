<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Athlete extends Model
{
    /** @use HasFactory<\Database\Factories\AthleteFactory> */
    use HasFactory;
    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }

    public function team(){
        return $this->belongsTo(Team::class);
    }

    public function comments(){
        return $this->morphMany(Comment::class,"commentable");
    }
}
