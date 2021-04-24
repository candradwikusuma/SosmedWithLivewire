@extends('layouts.app',['title'=>'Your Timeline'])

@section('content')
{{-- <div class="container">
    <div class="flex">
        <div class="w-full md:w-1/2">
      
        </div>
    </div>
</div> --}}
<div class="p-6">
    <livewire:status.create />
    <livewire:status.index />
</div>
@endsection