<?php

namespace App\Models;

use Firefly\FilamentBlog\Models\Comment as BaseComment;

class Comment extends BaseComment
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'post_id',
        'name', 
        'comment',
        'approved',
        'approved_at',
    ];
}





