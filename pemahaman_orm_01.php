<?php

namespace App\Http\Controllers;

use App\Models\School;

class SchoolController extends Controller
{
    public function getInauguratedDateRange(
        $start_date = date('2020-01-01'), 
        $end_date = date('2020-01-30')
    )
    {
        return School::whereBetween('inaugurated_date', [$start_date, $end_date])->get();
    }
}
