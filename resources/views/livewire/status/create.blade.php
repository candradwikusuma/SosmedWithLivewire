<div class="border border-cool-gray-300 mb-5 rounded-lg overflow-hidden">
    <div class="p-4 bg-cool-gray-200 text-cool-gray-700">
        Your Status
    </div>
    <div class="class-body p-4 ">
        <form wire:submit.prevent="store">
            <textarea placeholder="What's in your mind" wire:model="body"
                class="w-full  rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 resize-none "></textarea>
            @error('body')
            <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
            @enderror
            <div class="flex justify-end">
                {{-- <x-button.primary {{ isset($body) && !empty($body) ? '' : 'disabled' }} value="{{ $body }}">Post
                </x-button.primary> --}}
                {{-- <button
                    class="flex justify-center px-4 py-2 font-medium text-white bg-indigo-600  rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700  active:bg-indigo-700 transition duration-150 ease-in-out disabled:opacity-50"
                    {{ $isDisabled ? 'disabled' : '' }}>
                Post
                </button> --}}
                <button
                    class="flex justify-center px-4 py-2 font-medium text-white bg-indigo-600  rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700  active:bg-indigo-700 transition duration-75 ease-in-out disabled:opacity-50"
                    {{ isset($body) && !empty($body) ? '' : 'disabled' }}>
                    Post
                </button>
            </div>
        </form>

    </div>
</div>