@if($userComments->isNotEmpty())
    <h3>Your Comments:</h3>
    <ul>
        @foreach($userComments as $comment)
            <li class="mb-4">
                <p class="text-gray-800">{{ $comment->content }}</p>
                <p class="text-gray-600 text-sm">Commented on: 
                    <a href="{{ url('/threads/' . $comment->thread_id) }}" class="text-blue-500 hover:underline">
                        View Thread
                    </a>
                </p>
                <p class="text-gray-500 text-xs">
                    {{ $comment->created_at->timezone('Asia/Manila')->format('F j, Y, g:i a') }}
                </p>
            </li>
        @endforeach
    </ul>
@else
    <p>You haven't posted any comments yet.</p>
@endif