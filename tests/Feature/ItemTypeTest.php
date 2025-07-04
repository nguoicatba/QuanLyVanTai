<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\ItemType;

class ItemTypeTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * A test for index item types.
     */
    public function test_index_displays_itemtypes()
    {
        $itemtypes = ItemType::factory()->count(3)->create([
            'code' => fn() => fake()->unique()->bothify('IT###'),
            'name' => fn() => fake()->unique()->word(),
        ]);
        $response = $this->get(route('itemtype.index', [
            'table' => $itemtypes
        ]));
        $response->assertOk()
            ->assertViewIs('itemtype.index')
            ->assertViewHas('table', $itemtypes)
            ->assertSeeText($itemtypes[0]->name)
            ->assertSeeText($itemtypes[1]->name)
            ->assertSeeText($itemtypes[2]->name);
    }

    public function test_create_displays_form()
    {
        $response = $this->get(route('itemtype.create'));
        $response->assertStatus(200);
        $response->assertSee('form');
    }

    public function test_store_creates_itemtype()
    {
        $data = [
            'code' => 'IT001',
            'name' => 'Test ItemType',
        ];
        $response = $this->post(route('itemtype.store'), $data);
        $response->assertRedirect(route('itemtype.index'));
        $this->assertDatabaseHas('item_types', $data);
    }

    public function test_edit_displays_form()
    {
        $itemtype = ItemType::factory()->create([
            'code' => 'IT002',
            'name' => 'Edit ItemType',
        ]);
        $response = $this->get(route('itemtype.edit', $itemtype->code));
        $response->assertStatus(200);
        $response->assertSee($itemtype->name);
    }

    public function test_update_modifies_itemtype()
    {
        $itemtype = ItemType::factory()->create([
            'code' => 'IT003',
            'name' => 'Old Name',
        ]);
        $data = ['name' => 'Updated ItemType'];
        $response = $this->put(route('itemtype.update', $itemtype->code), $data);
        $response->assertRedirect(route('itemtype.index'));
        $this->assertDatabaseHas('item_types', array_merge(['code' => $itemtype->code], $data));
    }

    public function test_destroy_deletes_itemtype()
    {
        $itemtype = ItemType::factory()->create([
            'code' => 'IT004',
            'name' => 'Delete ItemType',
        ]);
        $response = $this->delete(route('itemtype.destroy', $itemtype->code));
        $response->assertRedirect(route('itemtype.index'));
        $this->assertDatabaseMissing('item_types', ['code' => $itemtype->code]);
    }
}
