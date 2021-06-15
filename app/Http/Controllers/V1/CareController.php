<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use \App\Models\Care;

class CareController extends Controller
{
    
    public function index()
    {
        $cares = Care::all();
        return response($cares, 200);
    }

    public function show(Care $care)
    {
        return response($care);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            "name" => "required|",
            "ref" => "nullable",
            "description" => "nullable",
            "care_type_id" => "nullable",
            "institute_id" => "nullable",
            "price" => "nullable",
            "images" => "nullable",
            "views" => "nullable",
            "saved_by" => "nullable",
        ]);

        $care = Care::create($data);
        return response($care, 201);
    }

    public function update(Request $request, Care $care)
    {
        $data = $request->validate([
            "name" => "required|",
            "ref" => "nullable",
            "description" => "nullable",
            "care_type_id" => "nullable",
            "institute_id" => "nullable",
            "price" => "nullable",
            "images" => "nullable",
            "views" => "nullable",
            "saved_by" => "nullable",
        ]);
        // dd($data, $care->id);
        if( $care->update($data) ){
            return response($care, 201);
        }

        return response([],401);
    }

    public function destroy(Care $care)
    {
        $care->delete();
        return response([], 200);
    }


}
