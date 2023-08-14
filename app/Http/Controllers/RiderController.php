<?php

namespace App\Http\Controllers;

use App\Models\Rider;
use Illuminate\Http\Request;

class RiderController extends Controller
{
    public function fetchAllRiders()
    {
        return Rider::all();
    }
}
