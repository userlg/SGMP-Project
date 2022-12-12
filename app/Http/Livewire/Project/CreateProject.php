<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;

class CreateProject extends Component
{

    public $open = false;

    protected $listeners = ['close'];

    public function openModal()
    {

        $this->open = !($this->open);

        $this->emitTo('project.modal-project', 'show', $this->open);
    }

    public function close($open)
    {

        $this->open = $open;
    }


    public function render()
    {
        return view('livewire.project.create-project');
    }
}
