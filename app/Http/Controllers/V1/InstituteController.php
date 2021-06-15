<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use \App\Models\Institute;

class InstituteController extends Controller
{
    
    public function index()
    {
        $institutes = Institute::all();
        return response($institutes, 200);
    }

    public function show(Institute $institute)
    {
        return response($institute);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            "name" => "required",
            "institute_type" => "nullable",
            "slogan" => "nullable",
            "presentation" => "nullable",
            "email" => "required|email" ,
            "telephone1" => "nullable" ,
            "since" => "nullable",
            "address" => "nullable",
            "user_id" => "nullable",
            "city_id" => "nullable",
            "images" => "nullable",
            "work_days" => "nullable",
            "saved_by" => "nullable",
        ]);

        $institute = Institute::create($data);
        return response($institute, 201);
    }

    public function update(Request $request, Institute $institute)
    {
        $data = $request->validate([
            "name" => "required",
            "institute_type" => "nullable",
            "slogan" => "nullable",
            "presentation" => "nullable",
            "email" => "required|email" ,
            "telephone1" => "nullable" ,
            "since" => "nullable",
            "address" => "nullable",
            "user_id" => "nullable",
            "city_id" => "nullable",
            "images" => "nullable",
            "work_days" => "nullable",
            "saved_by" => "nullable",
        ]);

        if( $institute->update($data) ){
            return response($institute, 201);
        }

        return response([],401);
    }

    public function destroy(Institute $institute)
    {
        if($institute->delete()) {
            return response([], 200);
        }

        return response([], 401);
    }


}
