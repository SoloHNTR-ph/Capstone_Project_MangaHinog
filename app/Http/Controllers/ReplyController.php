<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use App\Models\Thread;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ReplyController extends Controller
{
    public function store(Request $request, Thread $thread, Comment $comment)
    {
        $request->validate([
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'parent_id' => 'nullable|exists:replies,id', 
        ]);
    
        $replyData = [
            'content' => $request->content,
            'user_id' => auth()->id(),
            'comment_id' => $comment->id, 
            'parent_id' => $request->parent_id,
        ];
    
        if ($request->hasFile('image')) {
            $replyData['image'] = $request->file('image')->store('replies', 'public');
        }
    
        try {
            $reply = Reply::create($replyData);
        } catch (\Exception $e) {
            return back()->withErrors('Failed to save reply. Please try again.');
        }
    
        return back()->with('message', 'Reply added successfully!');
    }

    

    public function update(Request $request, Reply $reply)
    {
        $this->authorize('update', $reply);

        $request->validate([
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $updateData = ['content' => $request->content];

        if ($request->hasFile('image')) {
            if ($reply->image) {
                Storage::delete('public/' . $reply->image);
            }
            $updateData['image'] = $request->file('image')->store('replies', 'public');
        }

        if ($request->has('remove_image')) {
            if ($reply->image) {
                Storage::delete('public/' . $reply->image);
            }
            $updateData['image'] = null;
        }

        $reply->update($updateData);

        return back()->with('message', 'Reply updated successfully!');
    }
}
