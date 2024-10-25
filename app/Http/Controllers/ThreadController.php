<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    public function index() 
    {
        return view('threads', [
            'threads' => thread::all(),
            
        ]);
    }


    public function show(Thread $thread) 
    {
        return view('thread', [
            'thread' => $thread
        ]);
    }
}
