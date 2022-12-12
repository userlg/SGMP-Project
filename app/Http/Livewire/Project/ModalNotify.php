<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;

class ModalNotify extends Component
{


    public $open, $title, $message, $icon;

    protected $listeners = ['build'];

    public function mount()
    {

        $this->open = false;

        $this->title = null;

        $this->message = null;

        $this->icon = null;
    }


    public function build($open, $title, $message, $icon)
    {

        //*****This function build the modal

        $this->open = $open;

        $this->title = $title;

        $this->message = $message;

        $this->icon = $icon;
    }

    public function close()
    {

        $this->reset(['open', 'title', 'message', 'icon']);
    }


    public function render()
    {
        return view('livewire.project.modal-notify');
    }
}
