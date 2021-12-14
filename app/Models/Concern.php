<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concern extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function office(){
        return $this->belongsTo(Office::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function medias(){
        return $this->hasMany(Media::class);
    }
}
