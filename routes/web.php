<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/services', function () {
    return view('pages.services');
});

Route::get('/service-details', function () {
    return view('pages.service-details');
});

Route::get('/projects', function () {
    return view('pages.project');
});

Route::get('/team', function () {
    return view('pages.team');
});

Route::get('/team-details', function () {
    return view('pages.team-details');
});

Route::get('/privacy-policy', function () {
    return view('pages.privacy-policy');
});

Route::get('/blog', function () {
    $query = \Firefly\FilamentBlog\Models\Post::published()
        ->with(['user', 'categories'])
        ->latest('published_at');
    
    // Filter by category if category parameter is provided
    if (request()->has('category')) {
        $query->whereHas('categories', function($q) {
            $q->where('slug', request('category'));
        });
    }
    
    // Filter by search term if search parameter is provided
    if (request()->has('search')) {
        $searchTerm = request('search');
        $query->where(function($q) use ($searchTerm) {
            $q->where('title', 'like', "%{$searchTerm}%")
              ->orWhere('body', 'like', "%{$searchTerm}%");
        });
    }
    
    $posts = $query->paginate(9);
    
    // Get all categories for sidebar
    $categories = \Firefly\FilamentBlog\Models\Category::withCount('posts')->get();
    
    return view('pages.blog', compact('posts', 'categories'));
});

Route::get('/blog-details', function () {
    return view('pages.blog-details');
});

// Custom dynamic blog post route
Route::get('/blog/{slug}', function ($slug) {
    $post = \Firefly\FilamentBlog\Models\Post::where('slug', $slug)
        ->whereNotNull('published_at')
        ->where('published_at', '<=', now())
        ->with(['user', 'categories', 'tags', 'comments' => function($query) {
            $query->where('approved', true)->with('user')->latest();
        }])
        ->firstOrFail();
    
    // Get recent posts for sidebar
    $recentPosts = \Firefly\FilamentBlog\Models\Post::published()
        ->latest('published_at')
        ->take(3)
        ->get();
    
    // Get all categories for sidebar
    $categories = \Firefly\FilamentBlog\Models\Category::withCount('posts')->get();
    
    // Get all tags for sidebar
    $tags = \Firefly\FilamentBlog\Models\Tag::get();
    
    return view('pages.blog-details', compact('post', 'recentPosts', 'categories', 'tags'));
})->name('blog.detail');

// Route to handle comment submission
Route::post('/blog/{slug}/comment', function ($slug) {
    $post = \Firefly\FilamentBlog\Models\Post::where('slug', $slug)->firstOrFail();
    
    $validated = request()->validate([
        'name' => 'required|string|max:255',
        'comment' => 'required|string',
    ]);
    
    // Get authenticated user if available
    $user = auth()->user();
    
    \Firefly\FilamentBlog\Models\Comment::create([
        'user_id' => $user?->id, 
        'post_id' => $post->id,
        'name' => $validated['name'], 
        'comment' => $validated['comment'],
        'approved' => false, 
        'approved_at' => null,
    ]);
    
    return redirect()->back()->with('success', 'Your comment has been submitted and is awaiting approval.');
})->name('blog.comment.store');

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/faq', function () {
    return view('pages.faq');
});

Route::get('/project-details', function () {
    return view('pages.project-details');
});

Route::get('/blog-list', function () {
    return view('pages.blog');
});

Route::get('/terms-condition', function () {
    return view('pages.terms-condition');
});

Route::get('/promotion', function () {
    return view('pages.promotion');
});

// Authentication routes
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->middleware('auth')->name('logout');
