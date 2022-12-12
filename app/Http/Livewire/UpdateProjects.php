<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;

use Livewire\Component;

use App\Models\Project;

class UpdateProjects extends Component
{


    public $projects;

    protected $listeners = ['updateProjects'];


    public function mount()
    {

        $user_id = Auth::user()->id;

        $this->projects = count(Project::where('user_id', $user_id)->get());
    }

    public function updateProjects($user_id)
    {

        $this->projects =  count(Project::where('user_id', $user_id)->get());
    }

    public function render()
    {
        return view('livewire.update-projects');
    }
}
