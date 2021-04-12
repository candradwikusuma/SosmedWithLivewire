<div class="container">
    <div class="flex">
        <div class="w-full md:w-1/2 ">
            <div class="bg-white rounded border border-cool-gray-200 shadow p-5">
                <h1 class="capitalize text-lg text-cool-gray-700 mb-5">Update Your Profile</h1>

                <form wire:submit.prevent="update">
                    <div class="mb-5 flex items-center ">
                        <div wire:loading wire:target="picture">
                            <x-loading class="la-dark mr-2" />
                        </div>
                        <div class="flex-shrink-0 mr-2">
                            @if ($picture)
                            <img src="{{ $picture->temporaryUrl() }}" alt=""
                                class="w-16 h-16 object-cover object-center rounded-full">
                            {{-- @elseif(!$picture && isset(auth()->user()->picture) )
                            <img src="{{ auth()->user()->avatar() }}" alt=""
                            class="w-16 h-16 object-cover object-center rounded-full"> --}}
                            @endif

                        </div>
                        <div>
                            <label for="picture" class="block font-medium mb-1">Your Profile Picture</label>
                            {{-- <input type="file" wire:model="picture" id="picture" class="w-full"> --}}
                            <div class="flex items-center justify-start ">
                                <label
                                    class="w-64 flex flex-row items-center px-3 py-2 bg-white text-indigo-500 rounded-lg shadow-sm tracking-wide uppercase border border-indigo-500 cursor-pointer hover:bg-indigo-500 hover:text-white">
                                    <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                    </svg>
                                    <span class="ml-2 text-sm flex items-center font-medium">Select a photo</span>
                                    <input type="file" class="hidden" wire:model="picture" id="picture" />
                                </label>
                            </div>
                            @error('picture')
                            <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>


                    </div>
                    <div class="mb-5">
                        <label for="username" class="block font-medium mb-1">Username</label>
                        <input type="text" wire:model="username" id="username"
                            class="w-full block rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        @error('username')
                        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="name" class="block font-medium mb-1">Name</label>
                        <input type="text" wire:model="name" id="name"
                            class="w-full block rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        @error('name')
                        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="description" class="block font-medium mb-1">Bio</label>
                        <textarea wire:model="description" id="description"
                            class="w-full block form-textarea rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>
                        @error('description')
                        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- <button type="submit"
                        class="flex justify-end px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring-2 focus:ring-indigo active:bg-indigo-700 transition duration-150 ease-in-out disabled:opacity-50"
                        {{ $isDisabled ? 'disabled' : '' }}>
                    Update
                    </button> --}}
                    <x-button.primary wire:loading.attr="disabled">
                        <svg fill="#FFF" height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none" />
                            <path d="M9 16h6v-6h4l-7-7-7 7h4zm-4 2h14v2H5z" />
                        </svg>
                        <span>Update</span>
                    </x-button.primary>

                </form>
            </div>
        </div>
    </div>
</div>

{{-- <div class="flex items-center justify-start ">
                            <label
                                class="w-64 flex flex-row items-center px-3 py-2 bg-white text-indigo-500 rounded-lg shadow-sm tracking-wide uppercase border border-indigo-500 cursor-pointer hover:bg-indigo-500 hover:text-white">
                                <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                </svg>
                                <span class="ml-2 text-sm flex items-center font-medium">Select a file</span>
                                <input type="file" class="hidden" wire:model="picture" id="picture" />
                            </label>
                        </div> --}}