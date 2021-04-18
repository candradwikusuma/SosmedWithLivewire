<div class="flex border border-cool-gray-300 rounded-lg p-5 ">
    <div class="mr-3 flex-shrink-0">
        <img class="w-16 h-16 rounded-full object-cover object-center" src="{{ auth()->user()->avatar() }}" alt="">
    </div>
    <div class="w-full">
        <div class="font-semibold mb-3 text-lg">{{ auth()->user()->name}}</div>
        <div>
            <form wire:submit.prevent="store">
                <div class="mb-3">
                    <textarea wire:model="body"
                        class="w-full resize-none bg-transparent  rounded-md  border-0 focus:ring-0  focus:shadow-none p-0 "
                        placeholder="write your idea"></textarea>
                </div>
                <div class="flex justify-end">
                    <button
                        class="flex justify-center px-4 py-2 font-medium text-cool-gray-200 bg-cool-gray-600  rounded-md hover:bg-cool-gray-500 shadow focus:outline-none focus:border-cool-gray-600  active:bg-cool-gray-600 transition duration-75 ease-in-out disabled:opacity-50"
                        {{ isset($body) && !empty($body)?'':'disabled' }}>
                        Post
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>