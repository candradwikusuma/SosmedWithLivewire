<div>
    @if(auth()->check() && auth()->user()->isNot($user))

    @if (auth()->user()->following($user))
    <x-button.danger wire:click="unfollow" wire:loading.attr="disabled">Unfollow</x-button.danger>
    @else
    <x-button.primary wire:click="follow" wire:loading.attr="disabled">Follow</x-button.primary>
    @endif

    @else

    <a class="inline-flex px-4 py-2 font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out"
        href="/settings">Edit your profile</a>
    @endif
</div>