<div>
    @foreach ($statuses as $status)
    <a href="#" class="flex mb-5">
        <div class="flex-shrink-0 mr-3">
            <img class="w-10 h-10 rounded-full object-center object-cover" src="{{ $status->user->avatar() }}" alt="">
        </div>
        <div>
            <div class="font-semibold text-cool-gray-900">{{ $status->user->name }}</div>
            <div class="text-cool-gray-800">{{ $status->body }}</div>
            <div class="text-sm text-cool-gray-400">{{ $status->published() }}</div>
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