<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Thread;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ThreadController extends Controller
{
    public function index() 
    {
        return view('threads.index', [
            'threads' => Thread::with(['user', 'likes'])->latest()->filter(request(['search']))->paginate(10)
            
        ]);
    }


    public function show(Thread $thread) 
    {
        $thread->load('comments.replies.user');

        return view('threads.show', compact('thread'));

    }

    public function create()
    {
        return view('threads.create');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title'=> 'required',
            'content'=> 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
    
        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }
    
        $formFields['user_id'] = auth()->id();
    
        Thread::create($formFields);
    
        return redirect('/threads')-> with('message', 'Thread created successfully!');
    }

    // Edit 
    public function edit(Thread $thread)
    {
        return view('threads.edit', [
            'thread' => $thread
        ]);
    }

    public function update(Request $request, Thread $thread)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        // Handle file upload
        if ($request->has('remove_image')) {
            // Delete the old image
            if ($thread->image) {
                Storage::delete('public/' . $thread->image);
            }
            $formFields['image'] = null;  // Remove image path from the database
        }
        
        if ($request->hasFile('image')) {
            if ($thread->image) {
                Storage::delete('public/' . $thread->image);
            }
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }
        
    
        $thread->update($formFields);
    
        return redirect('/threads/' . $thread->id)->with('message', 'Thread updated successfully!');
    }


    // Likes
    public function like(Thread $thread)
    {
        $user = auth()->user();

    
    if ($thread->likes()->where('user_id', $user->id)->exists()) {
        
        $thread->likes()->where('user_id', $user->id)->delete();
    } else {
        
        $thread->likes()->create([
            'user_id' => $user->id,
        ]);
    }

    return back();
    }

    


}
