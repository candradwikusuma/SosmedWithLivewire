@extends('layouts.base')

@section('body')
{{-- navigation theme 1 --}}
{{-- @include('layouts.partials.navigation') --}}

<div class="flex flex-col lg:flex-row">
    <div class="w-full lg:w-1/5">
        <livewire:navbar />
    </div>

    <div class="flex-1">
        @yield('content')
        @isset($slot)
        {{ $slot }}
        @endisset
    </div>
    <div class="w-full lg:w-1/3">
        <div class="w-full lg:w-1/3 lg:fixed lg:border-l border-cool-gray-200 lg:h-screen">
            <div class="p-4">
                @yield('righside')
            </div>
            <div class="border-t border-cool-gray-200 p-4 text-cool-gray-600 text-sm">
                <div class="mb-1">
                    Lorem ipsum dolor sit amet consectetur adipisicing
                </div>
                &copy; {{ config('app.name') }} since 2019 - {{ date('Y') }}
            </div>
        </div>

    </div>

</div>

@endsection