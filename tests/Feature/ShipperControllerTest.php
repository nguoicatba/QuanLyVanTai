<?php

namespace Tests\Feature;

use App\Helpers\PrimaryKeyGenerator;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Shipper;


class ShipperControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */

    public function test_index_displays_shippers()
    {
       
        $shippers = Shipper::count() < 3 ? Shipper::all() : Shipper::all()->take(3);
        $response = $this->get(route('shipper.index', [
            'table' => $shippers
        ]));
        $response->assertOk()
            ->assertViewIs('shipper.index')
            ->assertViewHas('table', $shippers);
          
    }

    public function test_create_displays_form()
    {
        $response = $this->get(route('shipper.create'));
        $response->assertStatus(200);
        $response->assertSee('form');
    }

    public function test_store_creates_shipper()
    {
     
        $data = [
            'shipper_name' => 'Test Shipper',
            'address' => '123 Test St',
            'phone' => '123456789',
            'fax' => '987654321',
            'tax_code' => '1234567890',
            'storage_fee' => 500.00,
            'bank_account' => '123456789012',
            'bank_name' => 'Test Bank',
            'bank_address' => '456 Bank St',
            'id_number' => '1234567890',
            'tax_percent' => 5,
            'debt_balance' => 1000.00,
        ];
        $response = $this->post(route('shipper.store'), $data);
        $response->assertRedirect(route('shipper.index'));
        $this->assertDatabaseHas('shippers', $data);
    }

    public function test_edit_displays_form()
    {
        $shipper = Shipper::factory()->create();
        $response = $this->get(route('shipper.edit', $shipper->shipper_code));
        $response->assertStatus(200);
        $response->assertSee($shipper->shipper_name);
    }

    public function test_update_modifies_shipper()
    {
   
        $data = [
            'shipper_code'=>'SH00001',
            'shipper_name' => 'Test Shipper',
            'address' => '123 Test St',
            'phone' => '123456789',
            'fax' => '987654321',
            'tax_code' => '1234567890',
            'storage_fee' => 500.00,
            'bank_account' => '123456789012',
            'bank_name' => 'Test Bank',
            'bank_address' => '456 Bank St',
            'id_number' => '1234567890',
            'tax_percent' => 5,
            'debt_balance' => 1000.00,
        ];
        // Create a shipper to update
        $shipper = Shipper::factory()->create([
            'shipper_code' => $data['shipper_code'],
        ]);

        $response = $this->put(route('shipper.update', $shipper->shipper_code), $data);

        $response->assertRedirect(route('shipper.index'));
        $this->assertDatabaseHas('shippers', [
            'shipper_code' => $data['shipper_code'],
            'shipper_name' => $data['shipper_name'],
            'address' => $data['address'],
            'phone' => $data['phone'],
            'fax' => $data['fax'],
            'tax_code' => $data['tax_code'],
            'storage_fee' => $data['storage_fee'],
            'bank_account' => $data['bank_account'],
            'bank_name' => $data['bank_name'],
            'bank_address' => $data['bank_address'],
            'id_number' => $data['id_number'],
            'tax_percent' => $data['tax_percent'],
            'debt_balance' => $data['debt_balance'],
        ]);
    }

    public function test_destroy_deletes_shipper()
    {
        $shipper = Shipper::factory()->create();
        $response = $this->delete(route('shipper.destroy', $shipper->shipper_code));
        $response->assertRedirect(route('shipper.index'));
        $this->assertDatabaseMissing('shippers', ['shipper_code' => $shipper->shipper_code]);
    }
}