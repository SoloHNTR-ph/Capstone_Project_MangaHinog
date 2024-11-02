<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['content', 'thread_id', 'user_id', 'image', 'parent_id'];

    public function thread()
    {
        return $this->belongsTo(Thread::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id')->whereNotNull('parent_id');
    }

    public function repliesCount()
    {
        return $this->replies()->with('replies')->get()->reduce(function ($carry, $reply) {
            return $carry + 1 + $reply->repliesCount();
        }, 0);
    }

    public function likes()
    {
        return $this->morphMany(Like::class, 'likeable');
    }
}
