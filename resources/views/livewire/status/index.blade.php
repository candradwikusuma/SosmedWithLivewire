<div>
    @foreach ($statuses as $status)
    <div class="mb-8">
        <livewire:status.block :status="$status" :key="$status->id" />
    </div>
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