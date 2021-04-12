<div class="bg-cool-gray-800" x-data="{open:false}">
    <div class="flex justify-between flex-col md:flex-row items-center">
        <div
            class="flex justify-between w-full md:w-auto items-center px-4 py-4 bg-cool-gray-900 md:bg-transparent md:border-b-0">
            <div>
                <a href="#" class=" text-white font-semibold text-lg">
                    {{ config('app.name') }}
                </a>
            </div>
            <div class="block md:hidden">
                <button @click="open=!open" class="text-white focus:outline-none">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                        <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

        </div>
        <div x-bind:class="{'hidden':!open}"
            class="leading-loose py-1 md:py-0 md:items-center md:flex justify-between w-full">
            <div class="flex flex-col md:flex-row md:items-center py-2">
                <a href="{{ route('timeline') }}"
                    class="block text-cool-gray-400 hover:text-white px-4 md:py-2">Timeline</a>
                <a href="" class="block text-cool-gray-400 hover:text-white px-4 md:py-2">Explore</a>

            </div>
            <div class="flex flex-col md:flex-row md:items-center">
                @auth
                <div x-data={dropDownIsOpen:false} class="border-t border-cool-gray-600 py-2">
                    <div>
                        <button @click="dropDownIsOpen=!dropDownIsOpen"
                            class="flex items-center focus:outline-none px-4 md:px-6 ">
                            <div class="flex-shrink-0 mr-2">
                                <img class="w-8 h-8 rounded object-cover object-center"
                                    src="{{ auth()->user()->avatar() }}">
                            </div>
                            <div class="block text-cool-gray-400 hover:text-white pr-4 md:py-2">
                                {{ auth()->user()->name }}
                            </div>

                        </button>

                    </div>
                    <div :class="{'md:hidden':!dropDownIsOpen}"
                        class="block md:absolute top-0 right-0 md:mr-4 md:mt-16 md:bg-cool-gray-700 md:w-56 md:rounded shadow-lg md:py-2">
                        <a href="{{ route('account.show',auth()->user()->usernameOrHash()) }}"
                            class="block text-cool-gray-400 hover:text-white px-4 ">Profile</a>
                        <a href="#" class="block text-cool-gray-400 hover:text-white px-4 ">Your Friends</a>
                        <a href="{{ route('settings') }}"
                            class="block text-cool-gray-400 hover:text-white px-4 ">Settings</a>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="block text-cool-gray-400 hover:text-white px-4 ">
                            Log out
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
                @else
                <a href="{{ route('login') }}" class="block text-cool-gray-400 hover:text-white px-4 md:py-4">Log
                    in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="block text-cool-gray-400 hover:text-white px-4 md:py-4">Register</a>
                @endif
                @endauth
            </div>
        </div>
    </div>
</div>