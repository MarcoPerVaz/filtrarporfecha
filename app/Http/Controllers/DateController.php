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
        // return $dates = Date::where('start_date', '>=', $start_month)->where('end_date', '<=', $end_month)->count();
        // return $datesMonth = Date::where('start_date', '>=', $start_month)->where('end_date', '<=', $end_month)->get();
        if ( request()->wantsJson() ) {
            $data =  [
                        'dates' =>  Date::where('start_date', '>=', $start_month)->where('end_date', '<=', $end_month)->count(),
                        'datesMonth' => Date::where('start_date', '>=', $start_month)->where('end_date', '<=', $end_month)->get()
                    ];
            return $data;
        }

        return view('date');

    }
}
