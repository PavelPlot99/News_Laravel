<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'image',
        'category_id',
        'city_id',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_news');

    }
}
