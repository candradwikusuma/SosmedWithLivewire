<div class="p-6 w-full">
    <div class="border border-cool-gray-300 rounded-lg p-5 mb-5">
        <livewire:status.block :status="$status" :key="$status->id" />
    </div>
    {{-- @if ($status->comments_count)
            @endif --}}
    <livewire:comment.index :status="$status" :key="$status->id" />
    @if (Auth::check() && !$status->comments_count)
    <livewire:comment.create :status="$status" :key="$status->id" />
    @endif

</div>