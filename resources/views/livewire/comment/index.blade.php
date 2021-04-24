<div>
    @if ($status->comments_count )
    <div class="bg-cool-gray-50 border border-cool-gray-200 rounded-lg  mb-5 ml-5 -mt-8 mr-5">
        @foreach ($comments as $comment)
        {{-- <div class="flex  border-b last:border-b-0 border-cool-gray-200 p-4"> --}}
        <div class="flex p-4">
            <div class="flex-shrink-0 mr-3">
                <img class="w-10 h-10 rounded-full object-center object-cover" src="{{ $comment->user->avatar() }}"
                    alt="">
            </div>
            <div>
                <div class="font-semibold">{{ $comment->user->name }}</div>
                <div class="text-sm text-cool-gray-600 mb-2">{{ $comment->created_at->diffForHumans() }}</div>
                <div class="leading-relaxed text-cool-gray-700">{!! nl2br($comment->body) !!}</div>
                <div class="text-sm mt-2 text-cool-gray-600 flex items-center">
                    <div class="mr-3">
                        {{ $comment->childern_count }} {{ Str::plural('Reply', $comment->childern_count) }}
                    </div>
                    <button onclick="window.location.href='#showReplyForm'"
                        wire:click.prevent="showReplyForm({{ $comment->id }})" class="focus:outline-none mr-3">Add
                        reply</button>
                    <livewire:comment.like :key="$comment->id" :comment="$comment" />
                </div>
            </div>
        </div>

        @if ($comment->childern_count)
        <div class=" ml-5 mb-5">
            @foreach ($comment->childern as $comment)
            <div class="flex  pl-10 py-2">
                <div class="flex-shrink-0 mr-3">
                    <img class="w-10 h-10 rounded-full object-center object-cover" src="{{ $comment->user->avatar() }}"
                        alt="">
                </div>
                <div>
                    <div class="font-semibold">{{ $comment->user->name }}</div>
                    <div class="text-sm text-cool-gray-600 mb-2">{{ $comment->created_at->diffForHumans() }}</div>
                    <div class="leading-relaxed text-cool-gray-700">{!! nl2br($comment->body) !!}</div>
                    <div class="text-sm mt-2 text-cool-gray-600 ">
                        <livewire:comment.like :key="$comment->id" :comment="$comment" />

                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif
        @endforeach
        <div id="showReplyForm">
            <form wire:submit.prevent="reply">
                <textarea wire:model="body"
                    class="w-full resize-none focus:outline-none border-0 focus:ring-blue-400 focus:ring-0 focus:border-cool-gray-200  rounded-t-none border-t border-gray-200"
                    placeholder="Reply the comment here..."></textarea>
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-600 py-2 text-center w-full text-white rounded-b-lg">Reply</button>
            </form>
        </div>

    </div>


    @endif
</div>