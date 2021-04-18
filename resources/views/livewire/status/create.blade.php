<div class="border border-cool-gray-200 mb-8 rounded-lg overflow-hidden">
    <div class="px-4 py-3 bg-cool-gray-100 border-b border-cool-gray-200  text-cool-gray-700 font-semibold">
        Your Status
    </div>
    <form wire:submit.prevent="store">
        <div class="p-4 bg-cool-gray-50 ">
            <textarea placeholder="What's in your mind" wire:model="body"
                class="w-full bg-transparent  rounded-md  border-0  focus:shadow-none p-0 focus:ring-0  resize-none  "></textarea>
            @error('body')
            <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
            @enderror

        </div>
        <div class="flex justify-end px-4 py-2 bg-cool-gray-100 border-t border-cool-gray-200">
            {{-- <x-button.primary {{ isset($body) && !empty($body) ? '' : 'disabled' }} value="{{ $body }}">Post
            </x-button.primary> --}}
            {{-- <button
                                class="flex justify-center px-4 py-2 font-medium text-white bg-indigo-600  rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700  active:bg-indigo-700 transition duration-150 ease-in-out disabled:opacity-50"
                                {{ $isDisabled ? 'disabled' : '' }}>
            Post
            </button> --}}
            <button
                class="flex justify-center px-4 py-2 font-medium text-cool-gray-200 bg-cool-gray-600  rounded-md hover:bg-cool-gray-500 shadow focus:outline-none focus:border-cool-gray-600  active:bg-cool-gray-600 transition duration-75 ease-in-out disabled:opacity-50"
                {{ isset($body) && !empty($body) ? '' : 'disabled' }}>
                Post
            </button>
        </div>

    </form>
</div>