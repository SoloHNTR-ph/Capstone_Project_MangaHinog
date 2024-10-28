@props(['thread'])

<div class="block p-6 border border-gray-200 rounded-lg shadow dark:border-gray-700 w-full">
                <a href="/threads/{{$thread['id']}}">
                    <div class="flex justify-between">
                        <div class="flex gap-3 items-center">
                          <div>
                            <img
                              class="rounded-full"
                              src="{{ $thread->user->profile_picture ? asset('storage/' . $thread->user->profile_picture) : asset('images/profile_placeholder.png') }}"
                              alt=""
                              height="40"
                              width="40"
                            />
                          </div>
                          <h1 class="font-bold text-lg">{{ $thread->user->name }}</h1>
                        </div>
                        <div>
                          @if ($thread->created_at != $thread->updated_at)
                          <p class="text-black text-xs">Updated {{ $thread->updated_at->diffForHumans() }}</p>
                          @else  
                          <p class="text-black text-xs">Posted {{ $thread->created_at->diffForHumans() }}</p>
                          @endif
                        </div>
                  
                      </div>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-black">
                        {{$thread['title']}}
                    </h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">
                        {{$thread['content']}}
                    </p>
                    <div>
                        @if($thread->image)
                            <img src="{{ asset('storage/' . $thread->image) }}" alt="Thread Image" class="w-48 h-auto rounded-lg mt-4">
                        @endif

                    </div>
                </a>
                <div class="flex gap-4 mt-3">
                    
                    <form class="flex gap-1" action="/threads/{{ $thread->id }}/like" method="POST">
                        @csrf
                        <button type="submit">
                            @if($thread->likes()->where('user_id', auth()->id())->count() > 0)
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M20.205 4.791a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412L12 21.414l8.207-8.207c2.354-2.353 2.355-6.049-.002-8.416z"></path></svg>
                            </button>
                            @if($thread->likes->count() > 0)
                                <p>{{ $thread->likes->count() }}</p>
                            @endif
                            @else
                                <button type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z"></path></svg>
                                </button>
                            @endif
                        </button>
                    </form>
                    
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
                </div>
            </div>