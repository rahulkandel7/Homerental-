<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\User;
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
        $listings = Listing::where('tole','LIKE', "%{$search}%")->orWhere('municipality','LIKE', "%{$search}%")->paginate(20);
        return view('search',compact('listings'));
    }

    public function looks($id)
    {
    
        $listing = Listing::find($id);
        return view('look',compact('listing'));
    }
    public function profile($id)
    {
        $user = User::find($id);
        $listings = Listing::where('user_id' , '=', "{$id}")->paginate(10);
        return view('profile',compact('user', 'listings'));
    }

    public function howtorent()
    {
        return view('howtorent');
    }

    public function howtorentout()
    {
        return view('howtorentout');
    }
    public function howwork()
    {
        return view('work');
    }

    public function contact()
    {
        return view('contact');
    }
}
