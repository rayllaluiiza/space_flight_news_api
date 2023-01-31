<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    
    protected $table = "articles";

    protected $fillable = ['id', 'featured', 'title', 'url', 'imageUrl', 'newsSite', 'summary', 'publishedAt'];

    public $timestamps = false;

    protected $casts = [
        'featured' => 'boolean'
    ];

    public function launches()
    {
        return $this->hasMany(Launch::class, 'articleId', 'id');
    }

    public function events()
    {
        return $this->hasMany(Event::class, 'articleId', 'id');
    }

    public function setFeaturedAttribute($value)
    {
        $this->attributes['featured'] = ($value == true ? 1 : 0);
    }
}
