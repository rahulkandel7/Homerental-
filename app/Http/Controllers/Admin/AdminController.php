<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Listing;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard()
    {
        $tenants = User::where('type' , '=', 'tenant')->paginate(5);
        $landlords = User::where('type' , '=', 'landlord')->paginate(5);
        $listings = Listing::all();
        $blogs = DB::table('blogs')->select('*')->paginate(5);
    
        return view('dashboard', compact('tenants', 'landlords', 'listings', 'blogs'));
    }

    public function listings()
    {
        $listings= DB::table('listings')->select('*')->paginate(10);
        return view('admin.listings',compact('listings'));
    }
}
