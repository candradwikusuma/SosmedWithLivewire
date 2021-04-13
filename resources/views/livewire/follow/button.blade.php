<div>
    @auth
    @if(auth()->user()->isNot($user))

    @if (auth()->user()->following($user))
    <x-button.danger wire:click="unfollow" wire:loading.attr="disabled">Unfollow</x-button.danger>
    @else
    <x-button.primary wire:click="follow" wire:loading.attr="disabled">Follow</x-button.primary>
    @endif

    @else

    <a class="flex justify-center px-4 py-2 font-medium text-cool-gray-200 bg-cool-gray-600  rounded-md hover:bg-cool-gray-500 shadow focus:outline-none focus:border-cool-gray-600  active:bg-cool-gray-600 transition duration-75 ease-in-out "
        href="/settings">Edit your profile</a>
    @endif
    @endauth

</div>