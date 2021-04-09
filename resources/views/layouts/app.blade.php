@extends('layouts.base')

@section('body')
@include('layouts.partials.navigation')
<div class="py-3">
    @yield('content')
</div>

@isset($slot)
{{ $slot }}
@endisset
@endsection