@if($userThreads->isNotEmpty())
    <h3>Your Threads:</h3>
    <ul>
        @foreach($userThreads as $thread)
            <li class="flex gap-2 items-center">
                <a href="{{ url('/threads/' . $thread->id) }}" class="text-white p-1 bg-black rounded-lg">{{ $thread->title }}</a>
                <p class="text-gray-600">{{ $thread->created_at->format('F j, Y, g:i a') }}</p>
            </li>
        @endforeach
    </ul>
@else
    <p>You haven't posted any threads yet.</p>
@endif
