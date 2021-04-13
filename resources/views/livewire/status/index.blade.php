<div>
    @foreach ($statuses as $status)
    <a href="{{ route('status.show',$status->hash) }}" class="flex mb-8">
        <div class="flex-shrink-0 mr-3">
            <img class="w-10 h-10 rounded-full object-center object-cover" src="{{ $status->user->avatar() }}" alt="">
        </div>
        <div>
            <div class="font-semibold text-cool-gray-900">{{ $status->user->name }}</div>
            <div class="text-sm text-cool-gray-400">{{ $status->published() }}</div>
            <div class="text-cool-gray-800">{{ $status->body }}</div>
            <div class="text-sm text-cool-gray-400 mt-2 flex  items-center">
                <div class="flex items-center mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                    </svg>
                    23 comments
                </div>
                <div class="flex items-center ml-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor ">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                    </svg>
                    120 likes
                </div>
            </div>
        </div>
    </a>
    @endforeach
    @if ($statuses->hasMorePages())
    <div class="flex justify-center">

        <x-button.primary wire:click.prevent="loadMore" wire:loading.attr="disabled">
            <div wire:loading.flex wire:loading.class="inline-flex items-center" wire:target="loadMore">
                <x-loading class="mr-2 la-sm " />

                <div>waiting...</div>
            </div>
            <span wire:loading.remove>Load more</span>
            {{-- cara ke 2 --}}
            {{-- <span wire:loading.class="hidden">Load more</span> --}}
        </x-button.primary>
    </div>
    @endif
    {{-- {{ $statuses->links() }} --}}
</div>