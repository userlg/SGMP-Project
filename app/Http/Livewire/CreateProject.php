<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateProject extends Component
{

    public $open = false;
    
    protected $listeners = ['close'];

    public function openModal(){

        $this->open = ! ($this->open);
        
        $this->emitTo('modal-project','show', $this->open);

    }

    public function close($open){

        $this->open = $open;
    }


    public function render()
    {
        return view('livewire.create-project');
    }
}
