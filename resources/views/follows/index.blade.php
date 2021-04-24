@extends('layouts.app',['title'=>'Following/ Followers'])

@section('content')
<div class="p-4 border-b border-gray-200 font-semibold text-lg">
    {{ucfirst($follow)}}
</div>
<div class="p-6">
    <div class="flex flex-wrap">
        @foreach ($follows as $follow)
        <div class="w-full lg:w-1/2 mb-4">
            <div class="flex items-center">
                <img class="h-16 w-16 rounded-full object-cover object-center mr-3 flex-shrink-0"
                    src="{{ $follow->avatar() }}" alt="{{ $follow->name }}">
                <div>
                    <div>
                        {{ $follow->name }}
                    </div>
                    <div class="text-sm text-gray-600">
                        {{ $follow->created_at->format('d F, Y') }}
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        {{ $follows->links() }}
    </div>
</div>
@endsection