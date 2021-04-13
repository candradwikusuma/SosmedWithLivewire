<div class="flex" wire:poll.60s>
    <div class="flex-shrink-0 mr-3">
        <a href="{{ route('account.show',$status->user->usernameOrHash()) }}">
            <img class="w-14 h-14 rounded-full object-center object-cover" src="{{ $status->user->avatar() }}" alt="">
        </a>
    </div>
    <div>
        <a href="{{ route('account.show',$status->user->usernameOrHash()) }}"
            class="font-semibold text-cool-gray-900 hover:underline">{{ $status->user->name }}
        </a>
        <a href="{{ route('status.show',$status->hash) }}">
            <div class="text-sm text-cool-gray-400 mb-2">{{ $status->published() }}</div>
            <div class="text-cool-gray-700 leading-relaxed">{{ $status->body }}</div>
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
        </a>
    </div>
</div>