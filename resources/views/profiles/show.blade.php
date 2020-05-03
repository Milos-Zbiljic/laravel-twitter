<x-app>
    <header class="mb-6 relative">
        <img src="/images/default-profile-banner.jpg" alt="" class="mb-2">
        <div class="flex justify-between items-center mb-4">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Join {{ $user->created_at->diffForHumans() }}</p>
            </div>
            <div class="flex">
                @can('edit', $user)
                <a href="{{ route('profile', current_user()) }}/edit" type="submit"
                    class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">Edit
                    Profile
                </a>
                @endcan
                <x-follow :user="$user"></x-follow>
            </div>
        </div>
        <p class="text-sm text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur, cumque
            voluptates,
            culpa facere eos
            sapiente odio accusamus, animi ipsum recusandae architecto iusto deleniti nam voluptas quibusdam nisi?
            Tempore, a iusto!</p>

        <img src="{{ $user->avatar }}" alt="" class="rounded-full mr-2 absolute"
            style="width: 150px; left: calc(50% - 75px); top: 138px">


    </header>

    @include('_timeline', [
    'tweets' => $tweets
    ])

</x-app>