<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Care;

class CaresTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function api_list_all_cares()
    {
        $response = $this->get('/api/cares');

        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function api_saving_a_care()
    {
        $response = $this->post('/api/cares/',$this->dataSet());

        $response->assertStatus(201);
        $this->assertCount(1, Care::all());
    }

    /**
     * @test
     */
    public function api_updating_a_care()
    {
        $care = Care::create($this->dataSet());
        $this->assertEquals("The super care", $care->name);

        $data = $this->dataSet();
        $data["name"] = "The new care";
        $response = $this->put('/api/cares/'.@$care->id, $data);

        $response->assertStatus(201);
        $care = Care::find($care->id);
        $this->assertEquals("The new care", $care->name);
    }

    /**
     * @test
     */
    public function api_delete_a_caretype()
    {
        $care = Care::create($this->dataSet());
        $this->assertCount( 1, Care::all() );
        
        $response = $this->delete( '/api/cares/'.@$care->id );
        $response->assertStatus(200);
        $this->assertCount( 0, Care::all() );
    }

    private function dataSet()
    {
        return [
            "name" => "The super care",
            "ref" => "abcd1234",
            "description" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor tenetur reprehenderit natus qui quia repudiandae dolore, aut laudantium in iste eveniet eum quam quis similique quae aliquid voluptate, vero illo?",
            "care_type_id" => 1,
            "institute_id" => 1,
            "price" => 100,
            "images" => "http://lorempixel.com/640/480/",
            "views" => 100,
            "saved_by" => 1,
        ];
    }
}
