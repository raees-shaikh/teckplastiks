<?php

namespace App\Http\Controllers\cms;

use App\Models\Offer;
use App\Models\Category;
use App\Models\Exhibition;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class StatisticsController extends Controller
{
    public function index()
    {
        $categoryCount = Category::count();
        $offersCount = Offer::count();
        $exhibitionCount = Exhibition::count();
        return view('backend.statistics.index', compact('categoryCount', 'offersCount', 'exhibitionCount'));
    }
}
