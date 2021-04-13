<div>
    <div class="bg-cool-gray-50 py-10 md:py-16 -mt-6 border-b border-cool-gray-200">
        <div class="container">
            <div class="flex flex-col md:flex-row items-center">
                <div class="w-full md:w-1/2">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 mr-3 md:mr-6">
                            <img src="{{ $user->avatar() }}" alt=""
                                class="w-24 h-24 object-cover object-center rounded-full">
                        </div>
                        <div>
                            <h1 class="font-semibold text-xl text-cool-gray-900 mb-2">{{$user->name}}</h1>
                            <div class="text-cool-gray-600 mb-5">
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
                <div class="w-full md:w-1/2 flex justify-center">
                    <livewire:follow.statistic :user="$user" />
                </div>
            </div>

        </div>
    </div>


    <div class="container mt-10">
        <div class="flex">
            <div class="md:w-1/2 w-full">
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

    </div>

</div>