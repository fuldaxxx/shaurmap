<?php

namespace App\Http\Controllers;

use App\Models\Point;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Database\Eloquent\Collection;

class PointController extends Controller
{
    public function index(): Collection
    {
        return Point::all();
    }

}
