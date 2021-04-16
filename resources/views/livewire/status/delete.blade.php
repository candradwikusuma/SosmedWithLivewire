<div class="container">
    <div class="w-full lg:w-1/2 sm:mx-auto rounded-lg text-center bg-white p-5 border border-cool-gray-200 ">
        <div class=" text-cool-gray-700">
            <div class="text-xl font-bold mb-5">
                Are you sure?
            </div>
            <div class="flex items-start border border-cool-gray-200 rounded-lg p-4 mb-5 bg-cool-gray-50">
                <img class="mr-3 w-16 h-16 rounded-full object-cover object-center" src="{{ $status->user->avatar() }}"
                    alt="">
                <div class="text-left">
                    <div class="text-sm text-cool-gray-400 mb-2">{{ $status->published() }}</div>
                    <div class="text-cool-gray-700 leading-relaxed">{!! nl2br($status->body) !!}</div>
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
            </div>

            <button wire:click.prevent="destroy"
                class="border border-red-500 bg-red-500 hover:bg-red-600 px-4 py-2 rounded-lg text-center inline-block text-white">Delete</button>
            <a class="border border-cool-gray-200 bg-white hover:bg-cool-gray-100 px-4 py-2 rounded-lg text-center inline-block"
                href="{{ route('status.show',$status->hash) }}">Cancel</a>
        </div>
    </div>
</div>