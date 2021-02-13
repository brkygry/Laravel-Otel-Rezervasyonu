<?php

namespace App\Models;

use App\Http\Livewire\Search;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    #One to Many (Inverse) / Belong to
    public function category(){
        return $this->belongsTo(Category::class);
    }

    #One to Many
    public function review(){
        return $this->hasMany(Review::class);
    }

    public function reservation(){
        return $this->hasMany(Reservation::class);
    }

}
