<?php

namespace App\Http\Livewire\Comment;

use Livewire\Component;
use Illuminate\Support\Carbon;

class Create extends Component
{
    public $body;
    public $status;
    public function mount($status){
        $this->status=$status;
    }
    public function updated($fields){
        $this->validateOnly($fields,[
            'body'=>'max:255'
        ]);
    }
    public function store(){
        $this->validate([
            'body'=>'required'
        ]);
        $commentId=auth()->user()->comments()->create([
            'status_id'=>$this->status->id,
            'body'=>$this->body,
            'hash'=>\Str::random(22).strtotime(Carbon::now())
        ]);
         $this->body='';
        $this->emit('commentAdded',$commentId->id);
        // return redirect()->route('status.show',$this->status->hash);
    }
    public function render()
    {
        return view('livewire.comment.create');
    }
}
