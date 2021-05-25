<?php

namespace App\Http\Controllers;

use App\Models\School; 

class ApiSchoolController extends Controller
{
    public function getInauguratedSchool()
    {
        $data = School::select('id', 'school_name', 'inaugurated_date')->get();
        return $data->toJson();
    }
}
