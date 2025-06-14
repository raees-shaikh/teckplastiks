<?php

namespace App\Http\Controllers\frontend;

use App\Models\Data;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $data = Data::where('name', 'Technical Data')->where('visibility', 1)->first();
        return view('frontend.index', compact('data'));
    }
}
