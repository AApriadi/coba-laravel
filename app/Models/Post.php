<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use Sluggable;

    //protected $fillable = ['title', 'author', 'excerpt', 'body'];
    protected $guarded = ['id'];
    protected $with = ['category', 'user'];

    public function scopeFilter($query, array $filters)
    {
        $query->when(isset($filters['search']) ? $filters['search'] : false, function ($query, $search) {
            return $query->where(function ($query) use ($search) {
                return $query->where('title', 'like', '%' . $search . '%')->orWhere('body', 'like', '%' . $search . '%')->orWhere('excerpt', 'like', '%' . $search . '%');
            });
        });

        $query->when(isset($filters['category']) ? $filters['category'] : false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        $query->when(isset($filters['author']) ? $filters['author'] : false, function ($query, $author) {
            return $query->whereHas('user', function ($query) use ($author) {
                $query->where('username', $author);
            });
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
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
