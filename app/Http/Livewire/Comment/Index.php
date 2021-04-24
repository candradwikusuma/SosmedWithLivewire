<?php

namespace App\Http\Livewire\Comment;

use Livewire\Component;
use Illuminate\Support\Carbon;
use App\Models\Timeline\Comment;

class Index extends Component
{
    public $body="";
    public $status;
    public $commentId;
    public $commentParentId;
    protected $listeners=['commentAdded'];
    public function commentAdded($commentId){
    }
    public function mount($status){
        $this->status=$status;
    }
   
    public function showReplyForm($id){
       $this->commentParentId=$id;
        $username=Comment::find($this->commentParentId)->user->usernameOrHash();
        $this->body="@{$username} ";
    }
    public function reply(){
        $this->validate([
            'body'=>'required|max:255'
        ]);
       auth()->user()->comments()->create([
            'parent_id'=>$this->commentParentId ?? null,
            'status_id'=>$this->status->id, 
            'body'=>$this->body,
            'hash'=>\Str::random(22).strtotime(Carbon::now())
       ]);
        $this->commentParentId=null;
       $this->body='';
    }
    public function render()
    {
        $comments=$this->status->comments()->where('parent_id',null)->withCount('childern')->get();
        return view('livewire.comment.index', compact('comments'));
    }
}
