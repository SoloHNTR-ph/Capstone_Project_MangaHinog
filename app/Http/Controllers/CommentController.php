<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Thread $thread)
    {
        $request->validate([
            'content' => 'required',
            'parent_id' => 'nullable|exists:comments,id', 
        ]);

        $thread->comments()->create([
            'content' => $request->content,
            'user_id' => auth()->id(),
            'parent_id' => $request->parent_id, 
        ]);

        return back()->with('message', 'Comment added successfully!');
    }

    public function like(Comment $comment)
    {
       $user = auth()->user();

    
        if ($comment->likes()->where('user_id', $user->id)->exists()) {
            $comment->likes()->where('user_id', $user->id)->delete();
        } else {
            $comment->likes()->create(['user_id' => $user->id]);
        }

        return back();
    }

}
