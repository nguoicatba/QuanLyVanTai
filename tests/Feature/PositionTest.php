<?php

namespace Tests\Feature;

use App\Models\Position;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PositionTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A test for index positions.
     */
    public function test_index_displays_positions()
    {
        $position = Position::factory()->count(3)->create();
        $response = $this->get(route('position.index', [
            'table' => $position
        ]));
        $response->assertOk()
            ->assertViewIs('position.index')
            ->assertViewHas('table', $position)
            ->assertSeeText($position[0]->position_name) // nhìn thấy tên position
            ->assertSeeText($position[1]->position_name)
            ->assertSeeText($position[2]->position_name);

    }

    public function test_create_displays_form()
    {
        $response = $this->get(route('position.create'));
        $response->assertStatus(200);
        $response->assertSee('form');
    }

    public function test_store_creates_position()
    {
        $data = [
            'position_name' => 'Test Position',
        ];
        $response = $this->post(route('position.store'), $data);
        $response->assertRedirect(route('position.index'));
        $this->assertDatabaseHas('positions', $data);
    }

    public function test_edit_displays_form()
    {
        $position = Position::factory()->create();
        $response = $this->get(route('position.edit', $position->position_id));
        $response->assertStatus(200);
        $response->assertSee($position->position_name);
    }

    public function test_update_modifies_position()
    {
        $position = Position::factory()->create();
        $data = ['position_name' => 'Updated Position'];
        $response = $this->put(route('position.update', $position->position_id), $data);
        $response->assertRedirect(route('position.index'));
        $this->assertDatabaseHas('positions', $data);
    }

    public function test_destroy_deletes_position()
    {
        $position = Position::factory()->create();
        $response = $this->delete(route('position.destroy', $position->position_id));
        $response->assertRedirect(route('position.index'));
        $this->assertDatabaseMissing('positions', ['position_id' => $position->position_id]);
    }
}
