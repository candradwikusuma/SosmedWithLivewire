<div class="flex w-full">
    <div class="flex-shrink-0 mr-3">

        <a href="{{ route('account.show',$status->user->usernameOrHash()) }}">
            <img class="w-14 h-14 rounded-full object-center object-cover" src="{{ $status->user->avatar() }}" alt="">
        </a>

    </div>
    <div class="w-full relative">
        {{-- x-data="{dropdownIsOpen:false}" --}}
        <div class="flex justify-between" x-data="dropdown()">
            <a href="{{ route('account.show',$status->user->usernameOrHash()) }}"
                class="font-semibold text-cool-gray-900 hover:underline">{{ $status->user->name }}
            </a>
            @can('update', $status)
            {{-- @click="dropdownIsOpen = !dropdownIsOpen" --}}
            <button x-on:click="open" class="hover:bg-cool-gray-100 p-1 rounded-full focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                </svg>
            </button>
            {{-- :class="{'hidden': !dropdownIsOpen}" --}}
            <div x-show="isOpen()" x-on:click.away="close"
                class="text-sm bg-white border border-cool-gray-200 shadow rounded-md py-2 w-48 absolute right-0 top-0 mt-8">
                <a href="{{ route('status.edit',$status->hash) }}"
                    class="block px-3 py-1 hover:bg-cool-gray-100 text-cool-gray-600 hover:text-cool-gray-800">Edit
                    Status</a>
                <a href="{{ route('status.delete',$status->hash) }}"
                    class="block px-3 py-1 hover:bg-cool-gray-100 text-cool-gray-600 hover:text-cool-gray-800">Hapus
                    Status</a>
            </div>
            @endcan

        </div>

        <a href="{{ route('status.show',$status->hash) }}">
            <div class="text-sm text-cool-gray-400 mb-2">{{ $status->published() }}</div>
            <div class="text-cool-gray-700 leading-relaxed">{!! nl2br($status->body) !!}</div>
            <div class="text-sm text-cool-gray-400 mt-2 flex  items-center">
                <div class="flex items-center mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                    </svg>
                    <a href="#showReplyForm">
                        {{ $status->comments_count }} {{ Str::plural('Comment',$status->comments_count) }}
                    </a>
                </div>
                <livewire:status.like :key="$status->id" :status="$status" />
            </div>
        </a>
    </div>
</div>

<script>
    function dropdown() {
        return {
            show: false,
            open() { 
                this.show = true 
                },
            close() { 
                this.show = false 
                },
            isOpen() { 
                return this.show === true 
                },
        }
    }
</script>