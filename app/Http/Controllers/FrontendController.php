<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function tenant()
    {
        return view('products.tenant');
    }

    public function landlord()
    {
        return view('products.landlord');
    }

    public function blog()
    {
        return view('blog');
    }

    public function tfaq()
    {
        return view('faq.tenant');
    }

    public function lfaq()
    {
        return view('faq.landlord');
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $listings = Listing::where('tole','LIKE', "%{$search}%")->orWhere('municipality','LIKE', "%{$search}%")->get();
        return view('search',compact('listings'));
    }

    public function looks($id)
    {
    
        $listing = Listing::find($id);
        return view('look',compact('listing'));
    }
}
