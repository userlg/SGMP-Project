<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\Project\CreateProject;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

use App\Models\User;

class CreateProjectTest extends TestCase
{
    /** @test */

    use RefreshDatabase;


    public function the_component_can_render()
    {

        //Vs code mark some error but works this test
        $this->actingAs(User::factory()->create());

        $component = Livewire::test(CreateProject::class);

        $component->assertStatus(200);
    }
}
