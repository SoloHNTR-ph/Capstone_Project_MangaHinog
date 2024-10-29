<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CommentController extends Controller
{
    public function store(Request $request, Thread $thread)
    {
        $request->validate([
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $commentData = [
            'content' => $request->content,
            'user_id' => auth()->id(),
        ];

        if ($request->hasFile('image')) {
            $commentData['image'] = $request->file('image')->store('comments', 'public');
        }

        $thread->comments()->create($commentData);

        return back()->with('message', 'Comment added successfully!');
    }

    public function update(Request $request, Comment $comment)
    {
        $this->authorize('update', $comment);

        $request->validate([
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $updateData = ['content' => $request->content];

        if ($request->hasFile('image')) {
            if ($comment->image) {
                Storage::delete('public/' . $comment->image);
            }
            $updateData['image'] = $request->file('image')->store('comments', 'public');
        }

        if ($request->has('remove_image')) {
            if ($comment->image) {
                Storage::delete('public/' . $comment->image);
            }
            $updateData['image'] = null;
        }

        $comment->update($updateData);

        return back()->with('message', 'Comment updated successfully!');
    }
}
