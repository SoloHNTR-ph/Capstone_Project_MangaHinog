@vite(['resources/css/app.css','resources/js/app.js'])
<x-navbar>
  
<section class="mx-20 my-10 font-sans">

    <div class="flex justify-between">
      <div class="flex gap-3 items-center">
        <div>
          <img
            class="rounded-full"
            src="{{ $thread->user->profile_picture ? asset('storage/' . $thread->user->profile_picture) : asset('profile_placeholder.png') }}"
            alt=""
            height="40"
            width="40"
          />
        </div>
        <h1 class="font-bold text-lg">{{ $thread->user->name }}</h1>
      </div>
      <div class="flex gap-3 items-center">
        @if ($thread->created_at != $thread->updated_at)
          <p class="text-black text-xs">Updated {{ $thread->updated_at->diffForHumans() }}</p>
        @else  
         <p class="text-black text-xs">Posted {{ $thread->created_at->diffForHumans() }}</p>
        @endif
        @if (auth()->id() == $thread->user_id)
        <a href="/threads/{{ $thread->id }}/edit" class="bg-black text-white py-1 px-2 rounded-full items-center flex">Edit</a>
      @endif
      </div>

    </div>
    <div class="flex flex-col ml-20">
      <h5 class="mb-2 text-2xl font-bold tracking-tight text-black">
        {{$thread['title']}}
    </h5>
    <p class="font-normal text-gray-700 dark:text-gray-400">
        {{$thread['content']}}
    </p>
    </div>
    <div class="flex justify-center w-full">
      @if($thread->image)
        <img src="{{ asset('storage/' . $thread->image) }}" alt="Thread Image" class="w-96 h-auto rounded-lg mt-4">
      @endif
    </div>
    <div class="flex gap-4 mt-3">
      <div class="flex gap-4 mt-3">
                    
        <form class="flex gap-1" action="/threads/{{ $thread->id }}/like" method="POST">
            @csrf
            <button type="submit">
                @if($thread->likes()->where('user_id', auth()->id())->count() > 0)
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M20.205 4.791a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412L12 21.414l8.207-8.207c2.354-2.353 2.355-6.049-.002-8.416z"></path></svg>
                </button>
                
                @else
                    <button type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z"></path></svg>
                    </button>
                @endif
            </button>
            @if($thread->likes->count() > 0)
              <p>{{ $thread->likes->count() }}</p>
            @endif
        </form>
        
        <div class="flex gap-1">
            <button>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    style="fill: rgba(0, 0, 0, 1); transform: msfilter"
                >
                    <path
                        d="M20 2H4c-1.103 0-2 .897-2 2v18l5.333-4H20c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2zm0 14H6.667L4 18V4h16v12z"
                    ></path>
                </svg>
                
            </button>
            @if ($thread->commentCount() > 0)
                <p>{{ $thread->commentCount() }}</p>
            @endif
        </div>
    </div>
    </div>
      <form  class="mt-8 w-full border border-gray-400 rounded relative" action="/threads/{{ $thread->id }}/comments" method="POST" enctype="multipart/form-data">
      @csrf
        <div class="w-full p-2">
            <textarea name="content"   
            id="comment-input"
            class="w-full border-none py-1 px-5 focus:border-none focus:ring-0 transition-all duration-300 ease-in-out focus:outline-none focus:py-3"
            placeholder="Write a comment..."
            onfocus="showButtons()"
             cols="3" rows="1"></textarea>
        </div>
        <div id="button-container" class="hidden">
            <div class="flex mb-2 me-2 justify-between gap-3">
                <div>
                    <input type="file" name="image">
                </div>
                <div>
                    <button
                    type="button"
                    class="px-2 py-1 bg-gray-600 text-white rounded-full hover:bg-gray-700"
                    onclick="hideButtons()"
                >
                    Cancel
                </button>
                <button
                    type="submit"
                    class="px-2 py-2 bg-red-500 text-white rounded-full hover:bg-red-600"
                >
                    Comment
                </button>
                </div>
            </div>
        </div>
      </form>
    
    
  </section>

  {{-- comments  --}}
  <section class="mx-20">
    <div class="p-4 mb-4">
      @foreach($thread->comments->where('parent_id', null) as $comment)
      <div class="flex gap-3 items-center">
          <div>
              <img class="rounded-full" src="{{ $comment->user->profile_picture ? asset('storage/' . $comment->user->profile_picture) : asset('profile_placeholder.png') }}" alt="" height="35" width="35" />
          </div>
          <h1 class="font-bold">{{ $comment->user->name }}</h1>
      </div>
      <p class="font-normal text-gray-700 dark:text-gray-400">
          {{ $comment->content }}
      </p>
  
      @if($comment->image)
          <img src="{{ asset('storage/' . $comment->image) }}" alt="Comment Image" class="mt-2 max-w-xs rounded">
      @endif
  
      <div class="flex gap-4 mt-3 items-center">
          <button class="toggle-btn">-</button>
          <form class="flex gap-1" action="/comments/{{ $comment->id }}/like" method="POST">
              @csrf
              @if ($comment->likes()->where('user_id', auth()->id())->count() > 0)
                  <button type="submit">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);">
                          <path d="M20.205 4.791a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412L12 21.414l8.207-8.207c2.354-2.353 2.355-6.049-.002-8.416z"></path>
                      </svg>
                  </button>
              @else
                  <button type="submit">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);">
                          <path d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z"></path>
                      </svg>
                  </button>
              @endif
              @if($comment->likes->count() > 0)
                  <p>{{ $comment->likes->count() }}</p>
              @endif
          </form>
          <div class="flex gap-1">
            <button onclick="toggleReplyForm({{ $comment->id }})" class="text-sm">Replies</button>
            @if ($thread->replies()->count() > 0)
                <p>{{ $thread->replies()->count() }}</p>
            @endif
          </div>
          
          <button onclick="toggleEditForm({{ $comment->id }})" class="text-sm">Edit</button>
      </div>
  
      
      <form id="reply-form-{{ $comment->id }}" action="/threads/{{ $thread->id }}/comments" method="POST" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="parent_id" value="{{ $comment->id }}">
          <div class="flex">
              <textarea name="content" placeholder="Reply to this comment..." class="w-full h-12 rounded"></textarea>
              <input type="file" name="image" class="ml-2">
              <button type="submit" class="ml-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);">
                      <path d="m21.426 11.095-17-8A1 1 0 0 0 3.03 4.242l1.212 4.849L12 12l-7.758 2.909-1.212 4.849a.998.998 0 0 0 1.396 1.147l17-8a1 1 0 0 0 0-1.81z"></path>
                  </svg>
              </button>
          </div>
      </form>
  
      <!-- Edit Form -->
      <form id="edit-form-{{ $comment->id }}" action="/comments/{{ $comment->id }}/edit" method="POST" enctype="multipart/form-data" class="hidden w-full items-center">
          @csrf
          @method('PUT')
          <textarea name="content" class="w-full h-12 rounded">{{ $comment->content }}</textarea>
          <input type="file" name="image" class="ml-2">
          @if($comment->image)
              <label class="inline-flex items-center ml-2">
                  <input type="checkbox" name="remove_image" value="1" class="form-checkbox">
                  <span class="ml-2 text-sm text-gray-900 dark:text-white">Remove Image</span>
              </label>
          @endif
          <button type="submit" class="ml-2">Update</button>
      </form>

      @if ($comment->replies)
          @include('partials.replies', ['replies' => $comment->replies])
      @endif
      @endforeach
  </div>  
  </section>
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.2" defer></script>
  <script>
    function toggleReplyForm(commentId) {
      var replyForm = document.getElementById('reply-form-' + commentId);
        if (replyForm.classList.contains('hidden')) {
            replyForm.classList.remove('hidden');
        } else {
            replyForm.classList.add('hidden');
        }
    }
</script>
  
  </x-navbar>


