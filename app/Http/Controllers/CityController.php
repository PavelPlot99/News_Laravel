<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function selectCity(Request $request)
    {
        session(['city_id' => $request->city]);

        return redirect()->route('index.news');
    }
}
