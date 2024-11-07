@foreach($comment->replies as $reply)
    <div class="pl-10 mt-4 space-y-4 reply-section border-l border-gray-300 p-4">
        <div class="flex items-center justify-between">
            <div class="flex gap-3 items center">
                <div>
                    <img class="rounded-full w-9 h-9 object-cover" src="{{ $reply->user->profile_picture ? asset('storage/' . $reply->user->profile_picture) : asset('profile_placeholder.png') }}" alt="Profile Image" />
                </div>
                <h1 class="font-bold">{{ $reply->user->name }}</h1>
            </div>
            @if (auth()->id() === $reply->user_id)
            <button id="dropdownMenuIconHorizontalButton-{{$reply->id}}" data-dropdown-toggle="dropdownDotsHorizontal-{{$reply->id}}" class="inline-flex items-center p-2 text-sm font-medium text-center " type="button"> 
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                  <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                </svg>
              </button>
              
              <!-- Dropdown menu -->
              <div id="dropdownDotsHorizontal-{{$reply->id}}" class=" hidden bz-10g-white divide-y divide-gray-100 rounded-lg shadow  dark:bg-gray-700 dark:divide-gray-600">
                  <ul class="text-sm text-gray-700 dark:text-gray-200 flex flex-col justify-center" aria-labelledby="dropdownMenuIconHorizontalButton-{{$reply->id}}">
                    <li>
                        <button onclick="toggleEditForm({{ $reply->id }})" class="px-3 py-2 w-full rounded-t-lg hover:bg-gray-200">Edit</button>
                    </li>
                    <li>
                        <form action="/comments/{{$reply->id}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-4 py-2 rounded-b-lg hover:bg-gray-200">Delete</button>
                        </form>
                    </li>
                    
                  </ul>
              </div>
            @endif
        </div>
        <p class="font-normal text-gray-700 dark:text-gray-400">{{ $reply->content }}</p>
        
        @if($reply->image)
            <img src="{{ asset('storage/' . $reply->image) }}" alt="Reply Image" class="mt-2 max-w-xs rounded">
        @endif

        <div class="flex gap-4 mt-3">
            
            <form class="flex gap-1" action="/comments/{{ $reply->id }}/like" method="POST">
                @csrf
                <button type="submit">
                    @if ($reply->likes()->where('user_id', auth()->id())->count() > 0)
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);">
                            <path d="M20.205 4.791a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412L12 21.414l8.207-8.207c2.354-2.353 2.355-6.049-.002-8.416z"></path>
                        </svg>
                    @else
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);">
                            <path d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z"></path>
                        </svg>
                    @endif
                </button>
                @if($reply->likes->count() > 0)
                  <p>{{ $reply->likes->count() }}</p>
              @endif
            </form>
            <div class="flex gap-1">
                <button onclick="toggleReplyForm({{ $reply->id }})" class="text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M10 11h6v7h2v-8a1 1 0 0 0-1-1h-7V6l-5 4 5 4v-3z"></path></svg></button>
                @if ($reply->repliesCount() > 0)
                    <p>{{ $reply->repliesCount() }}</p>
                @endif
            </div>
           
        </div>

        <!-- Reply Form -->
        <form id="reply-form-{{ $reply->id }}" class="hidden" action="{{ url('/threads/' . $thread->id . '/comments') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="parent_id" value="{{ $reply->id }}">
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

        <form id="edit-form-{{ $reply->id }}" action="{{ url('/comments/' . $reply->id) }}" method="POST" enctype="multipart/form-data" class="hidden mt-2">
            @csrf
            @method('PUT')
            <textarea name="content" class="w-full h-12 rounded">{{ $reply->content }}</textarea>
            <input type="file" name="image" class="mt-2">
            
            @if($reply->image)
                <label class="inline-flex items-center mt-2">
                    <input type="checkbox" name="remove_image" value="1" class="form-checkbox">
                    <span class="ml-2 text-sm text-gray-900">Remove Image</span>
                </label>
            @endif
            
            <div class="gap-3 mt-2">
                <button type="submit" class="px-2 py-1 bg-black text-white rounded-full">Save</button>
                <button type="button" onclick="toggleEditForm({{ $reply->id }})" class="px-2 py-1 bg-red-800 text-white rounded-full ">Cancel</button>
            </div>
        </form>


        
        @if ($reply->replies->isNotEmpty())
            @include('partials.replies', ['comment' => $reply])
        @endif
    </div>
@endforeach
