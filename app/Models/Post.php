<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory, Sluggable;
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

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    /**
     * Eloquent Relationalship
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'author');
    }

    // public function categories()
    // {
    //     return $this->belongsTo(Category::class, 'category');
    // }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
