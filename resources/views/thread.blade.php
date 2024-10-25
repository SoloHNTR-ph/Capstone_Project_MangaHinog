@vite(['resources/css/app.css','resources/js/app.js'])
@extends('navbar')
@section('navbar')
<section class="m-20">
    <div class="flex gap-3 items-center">
      <div>
        <img
          class="rounded-full"
          src="{{ asset('images/profile_placeholder.png') }}"
          alt=""
          height="40"
          width="40"
        />
      </div>
      <h1 class="font-bold text-lg">Username</h1>
    </div>
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-black">
        {{$thread['title']}}
    </h5>
    <p class="font-normal text-gray-700 dark:text-gray-400">
        {{$thread['content']}}
    </p>
    <div class="flex gap-4 mt-3">
      <button>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          style="fill: rgba(0, 0, 0, 1); transform: msfilter"
        >
          <path
            d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z"
          ></path>
        </svg>
      </button>
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
      <button></button>
    </div>
    <div class="mt-8 w-full border border-gray-400 rounded relative">
        <div class="w-full p-2">
            <input
                type="text"   
                id="comment-input"
                class="w-full border-none py-1 px-5 focus:border-none focus:ring-0 transition-all duration-300 ease-in-out focus:outline-none focus:py-3"
                placeholder="Write a comment..."
                onfocus="showButtons()"
            />
        </div>
        <div id="button-container" class="hidden">
            <div class="flex mb-2 me-2 justify-end gap-3">
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
    
    
    
  </section>
  <section class="mx-20">
      <!-- Original Comment Thread -->
      <div class="p-4 mb-4">
        <div class="flex gap-3 items-center">
          <div>
            <img class="rounded-full" src="{{ asset('images/profile_placeholder.png') }}" alt="" height="35" width="35" />
          </div>
          <h1 class="font-bold">Username</h1>
        </div>
        <p class="font-normal text-gray-700 dark:text-gray-400">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit...
        </p>
        <div class="flex gap-4 mt-3">
          <button class="toggle-btn">-</button>
          <button>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1); transform: msfilter">
              <path
                d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z">
              </path>
            </svg>
          </button>
          <button>Reply</button>
        </div>
    
        <!-- Replies Section -->
        <div class="pl-10 mt-4 space-y-6 reply-section">
          <!-- Reply 1 -->
          <div class="border-l border-gray-300  p-4">
            <div class="flex gap-3 items-center">
              <div>
                <img class="rounded-full" src="{{ asset('images/profile_placeholder.png') }}" alt="" height="35" width="35" />
              </div>
              <h1 class="font-bold">Username</h1>
            </div>
            <p class="font-normal text-gray-700 dark:text-gray-400">I would like to participate too...</p>
            <div class="flex gap-4 mt-3">
              <button class="toggle-btn">-</button>
              <button>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1); transform: msfilter">
                  <path
                    d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z">
                  </path>
                </svg>
              </button>
              <button>Reply</button>
            </div>
    
            <!-- Nested Reply 1.1 -->
            <div class="pl-10 mt-4 space-y-4 reply-section border-l border-gray-300  p-4">
              <div class="flex gap-3 items-center">
                <div>
                  <img class="rounded-full" src="{{ asset('images/profile_placeholder.png') }}" alt="" height="35" width="35" />
                </div>
                <h1 class="font-bold">AnotherUser</h1>
              </div>
              <p class="font-normal text-gray-700 dark:text-gray-400">Do you have Discord?</p>
              <div class="flex gap-4 mt-3">
                <button class="toggle-btn">-</button>
                <button>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1); transform: msfilter">
                    <path
                      d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z">
                    </path>
                  </svg>
                </button>
                <button>Reply</button>
              </div>
    
              <!-- Nested Reply 1.1.1 -->
              <div class="pl-10 mt-4 space-y-4 reply-section border-l border-gray-300 p-4">
                <div class="flex gap-3 items-center">
                  <div>
                    <img class="rounded-full" src="{{ asset('images/profile_placeholder.png') }}" alt="" height="35" width="35" />
                  </div>
                  <h1 class="font-bold">ReplyUser1</h1>
                </div>
                <p class="font-normal text-gray-700 dark:text-gray-400">Let me know when you finish this.</p>
                <div class="flex gap-4 mt-3">
                  <button class="toggle-btn">-</button>
                  <button>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1); transform: msfilter">
                      <path
                        d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z">
                      </path>
                    </svg>
                  </button>
                  <button>Reply</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
@endsection


