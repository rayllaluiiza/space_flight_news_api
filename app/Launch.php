<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Launch extends Model
{
    protected $table = 'launches';

    protected $fillable = ['id', 'provider', 'articleId'];

    public $timestamps = false;

    protected $hidden = ['articleId'];
}
