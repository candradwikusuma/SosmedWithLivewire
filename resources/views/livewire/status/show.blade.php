<div class="container">
    <div class="flex">
        <div class="md:w-1/2 w-full">
            <div class="border border-cool-gray-300 rounded-lg p-5 mb-5">
                <livewire:status.block :status="$status" :key="$status->id" />
            </div>
            {{-- @if ($status->comments_count)
            @endif --}}
            <livewire:comment.index :status="$status" :key="$status->id" />

            <livewire:comment.create :status="$status" :key="$status->id" />

        </div>
    </div>

</div>