<?php

namespace App\Http\Livewire\Status;

use Livewire\Component;

class Block extends Component
{
    public $status;
    public $commentId;
     protected $listeners=['commentAdded'];
    public function mount ($status){
        $this->status=$status;
    }
    public function commentAdded($commentId){
    }
    public function render()
    {
        return view('livewire.status.block');
    }
}
