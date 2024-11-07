@vite(['resources/css/app.css','resources/js/app.js'])
<x-navbar>
    <section class="mx-4 sm:mx-8 md:mx-20 py-10 font-sans">
        <div class="flex justify-between sm:flex sm:justify-between">
            <div class="flex gap-3 items-center">
                <div>
                    <img class="rounded-full w-12 h-12 object-cover" src="{{ $thread->user->profile_picture ? asset('storage/' . $thread->user->profile_picture) : asset('profile_placeholder.png') }}" alt="" />
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
                    <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots" class="inline-flex items-center text-sm font-medium text-center text-gray-900 bg-white rounded-lg dark:text-white dark:bg-gray-800" type="button">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                            <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                        </svg>
                    </button>
                    <div id="dropdownDots" class=" hidden bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="text-sm text-gray-700 dark:text-gray-200 flex flex-col justify-center">
                            <li>
                                <button class="px-3 py-2 w-full rounded-t-lg hover:bg-gray-200">
                                    <a href="/threads/{{ $thread->id }}/edit" >Edit</a>
                                </button>
                            </li>
                            <li>
                                <form action="/threads/{{ $thread->id }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this thread?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-4 py-2 rounded-b-lg hover:bg-gray-200">Delete</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @endif
            </div>
        </div>
        
        <div class="flex flex-col sm:ml-20">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-black">{{ $thread['title'] }}</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">{{ $thread['content'] }}</p>
        </div>
        
        <div class="flex justify-center w-full">
            @if($thread->image)
                <img src="{{ asset('storage/' . $thread->image) }}" alt="Thread Image" class="w-80 sm:w-96 h-auto rounded-lg mt-4">
            @endif
        </div>

        <div class="flex gap-4 mt-3">
            <form class="flex gap-1" action="/threads/{{ $thread->id }}/like" method="POST">
                @csrf
                <button type="submit">
                    @if($thread->likes()->where('user_id', auth()->id())->count() > 0)
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);"><path d="M20.205 4.791a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412L12 21.414l8.207-8.207c2.354-2.353 2.355-6.049-.002-8.416z"></path></svg>
                    @else
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);"><path d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z"></path></svg>
                    @endif
                </button>
                @if($thread->likes->count() > 0)
                    <p>{{ $thread->likes->count() }}</p>
                @endif
            </form>
            
            <div class="flex gap-1">
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);"><path d="M20 2H4c-1.103 0-2 .897-2 2v18l5.333-4H20c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2zm0 14H6.667L4 18V4h16v12z"></path></svg>
                </button>
                @if ($thread->commentCount() > 0)
                    <p>{{ $thread->commentCount() }}</p>
                @endif
            </div>
        </div>
        {{-- comment form  --}}
        <form class="mt-8 w-full border border-gray-400 rounded" action="/threads/{{ $thread->id }}/comments" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="w-full p-2">
                <textarea name="content" id="comment-input" class="w-full border-none py-1 px-5 focus:ring-0 transition-all" placeholder="Write a comment..." cols="3" rows="1" onfocus="showButtons()"></textarea>
            </div>
            <div id="button-container" class="hidden">
                <div class="flex justify-between gap-3 px-5 pb-2">
                    <div>
                        <input type="file" name="image">
                    </div>
                    <div class="pe-5 gap-2">
                        <button type="button" class="md:px-2 md:py-2 md:text-sm bg-gray-600 text-white rounded-full hover:bg-gray-700" onclick="hideButtons()">Cancel</button>
                        <button type="submit" class="md:px-2 md:py-2 md:text-sm bg-red-500 text-white rounded-full hover:bg-red-600">Comment</button>
                    </div>
                </div>
            </div>
        </form>
        
    </section>
    {{-- comments  --}}
    <section class="mx-4 sm:mx-8 md:mx-20">
        <div class="p-4 mb-4">
            @foreach($thread->comments->where('parent_id', null) as $comment)
                <div class="flex gap-3 items-center justify-between">
                    <div class="flex items-center gap-3">
                        <div>
                            <img class="rounded-full w-9 h-9 object-cover" src="{{ $comment->user->profile_picture ? asset('storage/' . $comment->user->profile_picture) : asset('profile_placeholder.png') }}" alt="" />
                        </div>
                        <h1 class="font-bold">{{ $comment->user->name }}</h1>
                    </div>
                    @if(auth()->id() === $comment->user_id)
                        <button id="dropdownMenuIconHorizontalButton-{{$comment->id}}" data-dropdown-toggle="dropdownDotsHorizontal-{{$comment->id}}" class="inline-flex items-center p-2 text-sm" type="button"> 
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                            </svg>
                        </button>
                        <div id="dropdownDotsHorizontal-{{$comment->id}}" class="hidden bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="text-sm text-gray-700 dark:text-gray-200 flex flex-col justify-center">
                                <li><button onclick="toggleEditForm({{ $comment->id }})" class="px-3 py-2 w-full rounded-t-lg hover:bg-gray-200">Edit</button></li>
                                <li>
                                    <form action="/comments/{{$comment->id}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-4 py-2 rounded-b-lg hover:bg-gray-200">Delete</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @endif
                </div>
                
                <p class="font-normal mt-3 ms-5 text-gray-700 dark:text-gray-400">{{ $comment->content }}</p>
                @if($comment->image)
                    <img src="{{ asset('storage/' . $comment->image) }}" alt="Comment Image" class="mt-2 max-w-xs rounded">
                @endif
                <div class="flex gap-4 mt-3 items-center">
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
                        <button onclick="toggleReplyForm({{ $comment->id }})">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);"><path d="M10 11h6v7h2v-8a1 1 0 0 0-1-1h-7V6l-5 4 5 4v-3z"></path></svg>
                        </button>
                        @if ($comment->repliesCount() > 0)
                            <p>{{ $comment->repliesCount() }}</p>
                        @endif
                    </div>
                </div>
                
                {{-- reply --}}
                <form id="reply-form-{{ $comment->id }}" class="hidden" action="/threads/{{ $thread->id }}/comments" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                    <div class="flex flex-col">
                        <textarea name="content" placeholder="Reply to this comment..." class="w-full h-12 rounded"></textarea>
                        <div class="flex mt-2 w-full justify-between">
                            <input type="file" name="image" class="ml-2">
                        <button type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);"><path d="m21.426 11.095-17-8A1 1 0 0 0 3.03 4.242l1.212 4.849L12 12l-7.758 2.909-1.212 4.849a.998.998 0 0 0 1.396 1.147l17-8a1 1 0 0 0 0-1.81z"></path></svg>
                        </button>
                        </div>
                    </div>
                </form>

                {{-- edit --}}
                <form id="edit-form-{{ $comment->id }}" class="hidden" action="/comments/{{$comment->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <textarea name="content" class="w-full h-12 rounded">{{ $comment->content }}</textarea>
                    <input type="file" name="image" class="mt-2">
                    @if($comment->image)
                        <label class="inline-flex items-center mt-2">
                            <input type="checkbox" name="remove_image" value="1" class="form-checkbox">
                            <span class="ml-2 text-sm text-gray-900">Remove Image</span>
                        </label>
                    @endif
                    <div class="gap-3 mt-2">
                        <button type="submit" class="px-2 py-1 bg-black text-white rounded-full">Save</button>
                        <button type="button" onclick="toggleEditForm({{ $comment->id }})" class="px-2 py-1 bg-red-800 text-white rounded-full ">Cancel</button>
                    </div>
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
            replyForm.classList.toggle('hidden');
        }
        function toggleEditForm(id) {
            const form = document.getElementById(`edit-form-${id}`);
            form.classList.toggle('hidden');
        }
    </script>
</x-navbar>
