<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'user_id',
        'name',
        'location',
        'city',
        'address',
        'artist',
        'date',
        'tickets',
        'poster',
        'price',
    ];
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
