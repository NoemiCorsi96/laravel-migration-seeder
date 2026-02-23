<?php

namespace App\Http\Controllers;

use App\Models\Train;

class TrainController extends Controller
{
    public function index()
    {
    $trains = Train::where('departure_time', '>=', now())
                   ->orderBy('departure_time', 'asc')
                   ->get();

    return view('trains.index', compact('trains'));
}
}