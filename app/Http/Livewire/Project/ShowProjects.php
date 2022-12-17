<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;

use Livewire\WithPagination;

use Illuminate\Support\Facades\Auth;

use App\Models\Project;

class ShowProjects extends Component
{

    use WithPagination;

    public $user_id, $search;

    private $projects;

    protected $listeners = ['update'];

    public function mount()
    {
        $this->search = "";

        $this->user_id = Auth::user()->id;

        $this->projects = Project::where('user_id', $this->user_id)->paginate(5);
    }


    public function update()
    {

        $this->projects = Project::where('user_id', $this->user_id)->paginate(5);
    }

    public function render()
    {
        $projects = $this->projects = Project::where('user_id', $this->user_id)->paginate(5);

        return view('livewire.project.show-projects', ['projects' => $projects]);
    }
}
