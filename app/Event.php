<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    protected $fillable = ['title', 'location', 'description', 'price', 'event_date'];

    public function users() {
        $this->belongsToMany(User::class);
    }
}
