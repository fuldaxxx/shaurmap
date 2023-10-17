<?php

namespace App\Http\Controllers;

use App\Models\Point;
use Illuminate\Http\Request;
use App\Models\Shaurma;

class ShaurmaController extends Controller
{
    public function index()
    {
        $allShaurmas = Shaurma::();
        $points = Point::all();
        return view('home', compact('allShaurmas', 'points'));
    }
}
