<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Posts extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'slug',
        'title',
        'author',
        'description',
        'image_path',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsto(User::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }



}
