<?php

namespace App\Http\Controllers\Radiology;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RadiologyController extends Controller
{
    public function show(){

        return view('radiology');

    }
}
