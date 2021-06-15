<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Institute;

class InstitutesTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function api_list_all_institutes()
    {
        $response = $this->get('/api/institutes');

        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function api_saving_a_institute()
    {
        $response = $this->post('/api/institutes/',$this->dataSet());

        $response->assertStatus(201);
        $this->assertCount(1, Institute::all());
    }

    /**
     * @test
     */
    public function api_updating_a_institute()
    {
        $caretype = Institute::create($this->dataSet());
        $this->assertEquals("LA Sparkle", $caretype->name);

        $data = $this->dataSet();
        $data["name"] = "New name";
        $response = $this->put('/api/institutes/'.@$caretype->id, $data);

        $response->assertStatus(201);
        $caretype = Institute::find($caretype->id);
        $this->assertEquals("New name", $caretype->name);
    }

    /**
     * @test
     */
    public function api_delete_a_caretype()
    {
        $caretype = Institute::create($this->dataSet());
        $this->assertCount( 1, Institute::all() );
        
        $response = $this->delete( '/api/institutes/'.@$caretype->id );
        $response->assertStatus(200);
        $this->assertCount( 0, Institute::all() );
    }

    private function dataSet()
    {
        return [
            "name" => "LA Sparkle",
            "institute_type" => 1,
            "slogan" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit.",
            "presentation" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit.Lorem ipsum dolor sit, amet consectetur adipisicing elit.Lorem ipsum dolor sit, amet consectetur adipisicing elit.",
            "email" => "lasparkle@email.com" ,
            "telephone1" => "1 929 233 223" ,
            "since" => "1998-06-25",
            "address" => "21 Great street - LA",
            "user_id" => 1,
            "city_id" => 1,
            "images" => "http://lorempixel.com/640/480/",
            "work_days" => "1::09x19;2::09x19;3::09x19;4::09x19;5::09x19;6::09x19;7::09x19;",
            "saved_by" => 1,
        ];
    }
}
