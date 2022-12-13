<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;

use Illuminate\Support\Facades\Auth;

use App\Models\Project;

class ModalProject extends Component
{
    public $open, $title, $description, $user_id;

    public function mount()
    {

        $this->title = "";

        $this->description = "";

        $this->open = false;

        $this->user_id = Auth::user()->id;
    }

    protected $listeners = ['show'];

    public function show($open)
    {
        $this->open = $open;
    }

    //*************Validation Rules
    protected $rules = [

        'title' => 'required|min:6|max:60',

        'description' => 'required|min:6|max:1000',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    //**********Function to create the project
    public function saveProject()
    {
        $validatedData = $this->validate();

        if (count($validatedData) > 0) {

            $this->open = false;

            $open = true;

            $title = "Exito!";

            $message = "Haz click en el boton";

            $icon = "success";

            $this->emitTo('project.modal-notify', 'build', $open, $title, $message, $icon);

            $this->emitTo('project.create-project', 'close', $this->open);

            $this->emitTo('project.update-projects', 'updateProjects', $this->user_id);

            $this->emitTo('project.show-projects', 'update');

            $this->reset(['title', 'description']);

            Project::create([
                'title' => $validatedData['title'],
                'description' => $validatedData['description'],
                'user_id' => $this->user_id
            ]);
        }
    }


    public function close()
    {
        $this->open = false;

        $this->reset(['title', 'description']);

        $this->emitTo('create-project', 'close', $this->open);

        $this->resetValidation();
    }

    public function render()
    {
        return view('livewire.project.modal-project');
    }
}
