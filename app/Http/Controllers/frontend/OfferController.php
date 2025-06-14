<?php

namespace App\Http\Controllers\frontend;

use App\Models\Offer;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OfferController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->paginate(12);
        return view('frontend.offers.index', compact('categories'));
    }

    public function offerIndex($slug)
    {
        // dd($slug);
        $category = Category::where('slug', $slug)->firstOrFail();
        $offers = $category->offers()->latest()->paginate(12, ['*'], 'offer');
        // dd($offers);
        $relatedCategories = Category::where('id', '!=', $category->id)->latest()->limit(6)->get();
        return view('frontend.offers.all-offers', compact('category', 'relatedCategories', 'offers'));
    }

    public function OfferShow($categorySlug, $offerSlug)
    {
        $category = Category::where('slug', $categorySlug)->firstOrFail();
        $offer = Offer::where('category_id', $category->id)->where('slug', $offerSlug)->firstOrFail();
        $relatedOffers = Offer::where('category_id', $category->id)->where('id', '!=', $offer->id)->latest()->limit(6)->get();
        // dd($relatedOffers);
        return view('frontend.offers.show', compact('category', 'offer', 'relatedOffers'));
    }
}
