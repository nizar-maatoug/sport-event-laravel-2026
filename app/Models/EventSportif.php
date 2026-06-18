<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class EventSportif extends Model
{
    /** @use HasFactory<\Database\Factories\TeamFactory> */
    use HasFactory;

    protected $fillable = [
        "name",
        "description",
    ];

    public function organizer(){
        return $this->belongsTo(User::class);
    }

    public function categories(){
        return $this->hasMany(Categorie::class);
    }

    public function athletes(){
        return $this->hasManyThrough(Athlete::class,Categorie::class);
    }

    public function comments(){
        return $this->morphMany(Comment::class,"commentable");
    }
}
