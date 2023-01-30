<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';

    protected $fillable = ['id', 'provider', 'articleId'];

    public $timestamps = false;

    protected $hidden = ['articleId'];
}
