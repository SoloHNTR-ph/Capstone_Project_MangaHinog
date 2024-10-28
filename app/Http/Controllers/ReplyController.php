<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    public function store(Request $request, Comment $comment)
    {
        $request->validate([
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('reply_images', 'public');
        }

        $comment->replies()->create([
            'content' => $request->content,
            'user_id' => auth()->id(),
            'image' => $imagePath,
        ]);

        return back()->with('message', 'Reply with image added successfully!');
    }
}

