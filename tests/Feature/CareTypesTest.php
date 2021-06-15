<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use \App\Models\CareType;

class CareTypesTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function api_list_all_caretypes()
    {
        $response = $this->get('/api/caretypes');

        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function api_saving_a_caretype()
    {
        $response = $this->post('/api/caretypes/',$this->dataSet());

        $response->assertStatus(201);
        $this->assertCount(1, CareType::all());
    }

    /**
     * @test
     */
    public function api_updating_a_caretype()
    {
        $caretype = CareType::create($this->dataSet());
        $this->assertEquals("Massage", $caretype->name);

        $data = $this->dataSet();
        $data["name"] = "New care";
        $response = $this->put('/api/caretypes/'.@$caretype->id, $data);

        $response->assertStatus(201);
        $caretype = CareType::find($caretype->id);
        $this->assertEquals("New care", $caretype->name);
    }

    /**
     * @test
     */
    public function api_delete_a_caretype()
    {
        $caretype = CareType::create($this->dataSet());
        $this->assertCount( 1, CareType::all() );
        
        $response = $this->delete( '/api/caretypes/'.@$caretype->id );
        $response->assertStatus(200);
        $this->assertCount( 0, CareType::all() );
    }

    private function dataSet()
    {
        return [
            "name" => "Massage",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, dolore atque? Provident eum minima saepe, reiciendis omnis, quas quibusdam, suscipit qui sapiente minus tenetur quisquam doloremque doloribus mollitia asperiores modi? ",
            "institute_type" => 1,
            "parent_id" => null,
            "image_url" => null,
            "show_menu" => 1,
        ];
    }
}
