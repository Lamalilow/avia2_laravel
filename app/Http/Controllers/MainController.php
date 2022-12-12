<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function mainView()
    {
        $flights =  Flight::all();
        return view('main', compact('flights'));
    }
}
