<?php

namespace App\Http\Livewire\Status;

use Livewire\Component;
use App\Models\Timeline\Status;

class Index extends Component
{
    public $perPage=10;
    
    public function loadMore(){
        $this->perPage+=10;
    }
    public function render()
    {
        // $statuses=auth()->user()->statuses()->paginate(10);
        $ids=auth()->user()->follows()->pluck('id');
        $ids->push(auth()->id());

        $statuses=Status::whereIn('user_id',$ids)->with('user')->latest()->paginate($this->perPage);
        return view('livewire.status.index',compact('statuses'));
    }
}
