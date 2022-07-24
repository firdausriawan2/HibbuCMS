<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'category',
        'content',
        'tags',
        'thumbnail',
        'author',
        'status'
    ];

    /**
     * Eloquent Relationalship
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'author');
    }

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category');
    }
}
