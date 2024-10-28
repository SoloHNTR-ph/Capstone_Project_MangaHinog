<?php

namespace App\Models;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class Thread extends Model
{
    use HasFactory;
    
    protected $fillable = ['title', 'content', 'user_id', 'image'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
            ->orwhere('title', 'like', '%' . request('search') . '%')
            ->orwhere('content', 'like', '%' . request('search') . '%');
        }
    }

    public function likes()
    {
        return $this->morphMany(Like::class, 'likeable');
    }

    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    

}
