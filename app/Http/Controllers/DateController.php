<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Date; //Importado para poder usar el modelo Date

class DateController extends Controller
{
    public function index()
    {
        $start_month = "2019-08-01";
        $end_month = "2019-08-31";

        // return $dates = Date::select('start_date')->get();
        if ( request()->wantsJson() ) {
            return $dates = Date::where('start_date', '>=', $start_month)->where('end_date', '<=', $end_month)->count();
        }

    }
}
