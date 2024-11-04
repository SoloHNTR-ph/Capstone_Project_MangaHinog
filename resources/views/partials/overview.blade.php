<div>
    @if($user)
    <p>Account Created: {{ $user->created_at->format('F j, Y, g:i a') }}</p>
    <p>Threads Posted: {{ $threadCount }}</p>
    <p>Comments Posted: {{ $commentCount }}</p>
    @endif
</div>
