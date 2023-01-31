<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Launch extends Model
{
    use HasFactory;
    
    protected $table = 'launches';

    protected $fillable = ['id', 'provider', 'articleId'];

    public $timestamps = false;

    protected $hidden = ['articleId'];
}
