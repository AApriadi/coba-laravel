<?php

namespace App\Models;

/*use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
}*/

class  Post
{
    private static $blog_posts = [
        [
            "title" => "Judul 1",
            "slug" => "judul-1",
            "author" => "Dedot",
            "body" => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, at dicta labore possimus quas rem repellat repudiandae. Aspernatur eos facilis inventore labore maiores nihil, odit perferendis vel! Accusamus deserunt ducimus eius facilis illo ipsum magnam maxime ut voluptatem voluptates.</p><p>At culpa enim eos nihil nostrum quaerat quidem quisquam sequi suscipit vitae. Dolore ipsum laudantium magni maxime natus placeat similique sit.</p>"
        ],
        [
            "title" => "Judul 2",
            "slug" => "judul-2",
            "author" => "Dedot",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, at dicta labore possimus quas rem repellat repudiandae. Aspernatur eos facilis inventore labore maiores nihil, odit perferendis vel! Accusamus deserunt ducimus eius facilis illo ipsum magnam maxime ut voluptatem voluptates. At culpa enim eos nihil nostrum quaerat quidem quisquam sequi suscipit vitae."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        /*$post = [];
        foreach ($posts as $p) {
            if ($p["slug"] === $slug) {
                $post = $p;
            }
        }

        return $post;*/
        return $posts->firstWhere('slug', $slug);
    }

    public static function find_title($slug)
    {
        /*$posts = self::$blog_posts;
        $title = "";
        foreach ($posts as $p) {
            if ($p["slug"] === $slug) {
                $title = $p["title"];
            }
        }

        return $title;*/
        $posts = static::all();
        $posts_unique = collect($posts->firstWhere('slug', $slug));
        return $posts_unique->get('title');
    }
}
