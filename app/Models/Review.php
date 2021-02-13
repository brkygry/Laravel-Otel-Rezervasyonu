<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * @var array
     */

    protected $fillable = [
        'hotel_id',
        'user_id',
        'IP',
        'subject',
        'review',
    ];

    public function hotel(){
        return $this->belongsTo(Hotel::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
