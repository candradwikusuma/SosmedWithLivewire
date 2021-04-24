<div>

    <div class="p-6 border-b border-cool-gray-200">
        <div class="">
            <div class=" flex items-start">
                <div class="flex-shrink-0 mr-3 md:mr-6">
                    <img src="{{ $user->avatar() }}" alt="" class="w-24 h-24 object-cover object-center rounded-full">
                </div>
                <div>
                    <h1 class="font-semibold text-xl text-cool-gray-900 mb-2">{{$user->name}}</h1>
                    <div class="text-cool-gray-600 mb-5">
                        <div>
                            {{-- {{ $user->description }} --}}

                            {{ $bio }}
                            @if (strlen($bio)>=90)
                            <button wire:click="readMore"
                                class="focus:outline-none text-sm hover:underline {{ $readmore?'block':'hidden' }}">Read
                                more</button>

                            <button wire:click="less"
                                class="focus:outline-none text-sm hover:underline {{ $readmore?'hidden':'block' }}">Less</button>
                            @endif


                        </div>
                        <div>
                            Joined:{{ $user->created_at->format('d F, Y') }}
                        </div>
                    </div>

                    <livewire:follow.button :user='$user'>
                </div>
            </div>
        </div>
        <div class="flex justify-center p-4">
            <livewire:follow.statistic :user="$user" />
        </div>
    </div>





    <div class="p-6">
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
    </div>


</div>