<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Firefly\FilamentBlog\Facades\SEOMeta;
use Firefly\FilamentBlog\Models\Category;
use Firefly\FilamentBlog\Models\ShareSnippet;
use Firefly\FilamentBlog\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function blog(): View
    {
        $pageName = 'Blog';
        $posts = Post::query()->with(['categories', 'user'])
            ->published()
            ->paginate(20);
        return view('pages.blog.index', compact('pageName', 'posts'));
    }

    public function viewPost($slug): View
    {
        $post = Post::query()->where('slug', $slug)->firstOrFail();
        $pageName = 'Blog';

        $categories = Category::query()->withCount('posts')->orderByDesc('posts_count')->get();
        $tags = Tag::query()->whereHas('posts')->withCount('posts')->orderByDesc('posts_count')->get();

        // Get related posts based on shared categories (excluding the current post)
        $relatedPosts = Post::whereHas('categories', function ($query) use ($post) {
            $query->whereIn(
                config('filamentblog.tables.prefix').'categories.id',  // Correctly prefixed table name
                $post->categories->pluck('id')
            );
        })
            ->where('id', '!=', $post->id) // Exclude the current post
            ->with(['categories', 'user'])
            ->limit(5)
            ->get();


        $shareButton = ShareSnippet::query()->active()->first();

        $post->load([
            'user',
            'categories',
            'tags',
            'comments' => fn($query) => $query->approved(),
            'comments.user'
        ]);

        return view('pages.blog.show', compact('pageName', 'post', 'shareButton', 'categories', 'tags', 'relatedPosts'));
    }
}
