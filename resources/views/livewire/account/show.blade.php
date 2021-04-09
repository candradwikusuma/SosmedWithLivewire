<div class="bg-cool-gray-700 py-10 -mt-6">
    <div class="container">
        <div class="flex items-start">
            <div class="flex-shrink-0 mr-2">
                <img src="{{ $user->avatar() }}" alt="" class="w-16 h-16 object-cover object-center rounded-full">
            </div>
            <div>
                <h1 class="font-semibold text-xl text-white">{{$user->name}}</h1>
                <div class="text-cool-gray-400 mb-5">
                    <div>
                        {{ $user->description }}
                    </div>
                    <div>
                        Joined:{{ $user->created_at->format('d F, Y') }}
                    </div>
                </div>
                <livewire:follow.button :user='$user'>
            </div>
        </div>
    </div>
</div>