<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;

use Illuminate\Support\Facades\Auth;

use App\Models\Project;

class ShowProjects extends Component
{

    public $projects, $user_id;

    protected $listeners = ['update'];

    public function mount()
    {

        $this->user_id = Auth::user()->id;

        $this->projects = Project::where('user_id', $this->user_id)->get();
    }


    public function update(){

        $this->projects = Project::where('user_id', $this->user_id)->get();

    }

    public function render()
    {
        return view('livewire.project.show-projects');
    }
}
