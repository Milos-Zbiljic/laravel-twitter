<div class="flex p-4 {{$loop->last ? '' : 'border-b' }} border-b-gray-400">
    <div class="flex p-4">
        <a href="{{ route('profile', $tweet->user) }}">
            <div class="mr-2 flex-shrink-0">
                <img src="{{ $tweet->user->avatar }}" alt="" class="rounded-full mr-2" width="50" height="50">
            </div>
        </a>
        <div>
            <h5 class="font-bold mb-4">
                <a href="{{ route('profile', $tweet->user) }}">{{ $tweet->user->name }}</a></h5>
            <p class="text-sm mb-4">{{ $tweet->body }}</p>
            @auth
            <x-like-buttons :tweet="$tweet" />
            @endauth
        </div>
    </div>
</div>