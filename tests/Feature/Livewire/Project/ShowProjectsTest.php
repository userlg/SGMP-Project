<?php

namespace Tests\Feature\Livewire\Project;

use App\Http\Livewire\Project\ShowProjects;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

use App\Models\User;

class ShowProjectsTest extends TestCase
{
    /** @test */

    use RefreshDatabase;

    public function the_component_can_render()
    {

        $this->actingAs(User::factory()->create());

        $component = Livewire::test(ShowProjects::class);

        $component->assertStatus(200);
    }
}
