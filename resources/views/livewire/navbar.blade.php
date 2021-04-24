<div class="bg-white lg:h-screen w-full lg:w-1/5 lg:fixed lg:border-r border-cool-gray-200">
    @auth
    <div class="bg-cool-gray-50 border-b border-cool-gray-200 px-6 py-5">
        <div class="flex">
            <div class="flex-shrink-0 mr-3">

                <img class="w-14 h-14 rounded-full object-cover object-center" src="{{ auth()->user()->avatar() }}"
                    alt="">


            </div>
            <div>
                <h1 class="">{{ auth()->user()->name }}</h1>
                <small class="text-sm text-cool-gray-600">
                    Joined {{ auth()->user()->created_at->format('d F, Y') }}
                </small>
            </div>
        </div>
        <div class="leading-relaxed text-sm text-cool-gray-600 mt-4">
            {{ auth()->user()->description }}
        </div>
    </div>
    <div class="py-2 leading-loose">

        <a href="{{ route('timeline') }}" class="block py-1 px-6 hover:bg-cool-gray-100">Timeline</a>

        <a href="{{ route('account.show',auth()->user()->usernameOrHash()) }}"
            class="block py-1 px-6 hover:bg-cool-gray-100">Profile</a>
        <a href="#" class="block py-1 px-6 hover:bg-cool-gray-100">Your Friends</a>
        <a href="{{ route('settings') }}" class="block py-1 px-6 hover:bg-cool-gray-100">Settings</a>
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
            class="block py-1 px-6 hover:bg-cool-gray-100">
            Log out
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
    @else
    <div class="py-2 leading-loose">


        <a href="{{ route('Login') }}" class="block py-1 px-6 hover:bg-cool-gray-100">Login</a>
        <a href="{{ route('Register') }}" class="block py-1 px-6 hover:bg-cool-gray-100">Register</a>

    </div>
    @endauth

</div>