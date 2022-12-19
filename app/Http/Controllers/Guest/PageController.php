<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {

        $trains = Train::where('orario_partenza', '<=', '2022-12-19 23:59:59')->get();


        return view("trains.index", compact('trains'));
    }
}
