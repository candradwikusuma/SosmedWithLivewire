<?php

namespace App\Http\Livewire\Status;

use Carbon\Carbon;
use Livewire\Component;

class Create extends Component
{
    public $body;
    public $isDisabled=true;
    
    public function updated($fields){
        $this->validateOnly($fields,[
            'body'=>'max:255'
        ]);
    
//               if (!is_empty($this->body) {
//     $this->isDisabled = false
//  }else
//  $this->isDisabled = false
// }


    }

    public function store(){
        $this->validate([
            'body'=>'required|max:255'
        ]);
        $status=auth()->user()->statuses()->create([
            'hash'=>\Str::random(22).strtotime(Carbon::now()),
            'body'=>$this->body
        ]);
            $this->body='';
        $this->emit('statusUpdated',$status->id);
     
        return redirect()->back();
    }
    public function render()
    {
        return view('livewire.status.create');
    }
}
