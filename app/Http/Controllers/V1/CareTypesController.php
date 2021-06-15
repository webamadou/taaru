<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use \App\Models\CareType;

class CareTypesController extends Controller
{
    
    public function index()
    {
        $caretypes = CareType::all();
        return response($caretypes, 200);
    }

    public function show(CareType $caretype)
    {
        return response($caretype);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            "name" => "required|unique:care_types",
            "description" => "nullable",
            "institute_type" => "nullable",
            "parent_id" => "nullable",
            "image_url" => "nullable",
            "show_menu" => "nullable",
        ]);

        $caretype = CareType::create($data);
        return response($caretype, 201);
    }

    public function update(Request $request, CareType $caretype)
    {
        $data = $request->validate([
            "name" => "required|unique:care_types,name,$caretype->id",
            "description" => "nullable",
            "institute_type" => "nullable",
            "parent_id" => "nullable",
            "image_url" => "nullable",
            "show_menu" => "nullable",
        ]);
        // dd($data, $caretype->id);
        if( $caretype->update($data) ){
            return response($caretype, 201);
        }

        return response([],401);
    }

    public function destroy(CareType $caretype)
    {
        $caretype->delete();
        return response([], 200);
    }


}
