<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ModalProject extends Component
{

    public $open = false;

    protected $listeners = ['show'];

    public function show($open)
    {
        $this->open = $open;
    }

    public function close(){

        $this->open = false;

        $this->emitTo('create-project','close', $this->open);
    }

    public function render()
    {
        return view('livewire.modal-project');
    }
}
