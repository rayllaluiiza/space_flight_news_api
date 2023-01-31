<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    
    protected $table = 'events';

    protected $fillable = ['id', 'provider', 'articleId'];

    public $timestamps = false;

    protected $hidden = ['articleId'];
}
