<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->id;
        $listings = DB::table('listings')->where('user_id', '=', $user)->get();
        return view('listings.index', compact('listings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('listings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'tole' => ['required','string'],
            'municipality' => ['required','string'],
            'wardno' => ['required', 'integer'],
            'price' => ['required', 'integer'],
            'tbphoto' => ['nullable', 'image', 'mimes:jpeg,png,jpg', 'max:5048'],
            'hallphoto' => ['nullable', 'image', 'mimes:jpeg,png,jpg', 'max:5048'],
            'kitchenphoto' => ['nullable', 'image', 'mimes:jpeg,png,jpg', 'max:5048'],
            'psphoto' => ['nullable', 'image', 'mimes:jpeg,png,jpg', 'max:5048'],
            'froom' => ['nullable', 'image', 'mimes:jpeg,png,jpg', 'max:5048'],
            'sroom' => ['nullable', 'image', 'mimes:jpeg,png,jpg', 'max:5048'],
            'info' => 'required',
            'rules' => 'required',
            'isNegotiable' => ['required', 'boolean'],
            'isAvailable' => ['required', 'boolean'],
            'age_range' => 'required',
            'tenant_type' => 'required',
            'gender' => 'required',
            'type' => 'required',
        ]);

        $data['user_id'] = Auth::user()->id;

        $data['isNegotiable'] = $request->isNegotiable == '0' ? false : true;
        $data['isAvailable'] = $request->isNegotiable == '0' ? false : true;

        if($request->hasFile('tbphoto')){
            $fname = Str::random(20);
            $fexe = $request->file('tbphoto')->extension();
            $fpath = "$fname.$fexe";

            $request->file('tbphoto')->storeAs('public/listings', $fpath); 

            $data['tbphoto'] = 'listings/'.$fpath;
        }

        if($request->hasFile('hallphoto')){
            $fname = Str::random(20);
            $fexe = $request->file('hallphoto')->extension();
            $fpath = "$fname.$fexe";

            $request->file('hallphoto')->storeAs('public/listings', $fpath); 

            $data['hallphoto'] = 'listings/'.$fpath;
        }

        if($request->hasFile('kitchenphoto')){
            $fname = Str::random(20);
            $fexe = $request->file('kitchenphoto')->extension();
            $fpath = "$fname.$fexe";

            $request->file('kitchenphoto')->storeAs('public/listings', $fpath); 

            $data['kitchenphoto'] = 'listings/'.$fpath;
        }

        if($request->hasFile('psphoto')){
            $fname = Str::random(20);
            $fexe = $request->file('psphoto')->extension();
            $fpath = "$fname.$fexe";

            $request->file('psphoto')->storeAs('public/listings', $fpath); 

            $data['psphoto'] = 'listings/'.$fpath;
        }

        if($request->hasFile('froom')){
            $fname = Str::random(20);
            $fexe = $request->file('froom')->extension();
            $fpath = "$fname.$fexe";

            $request->file('froom')->storeAs('public/listings', $fpath); 

            $data['froom'] = 'listings/'.$fpath;
        }

        if($request->hasFile('sroom')){
            $fname = Str::random(20);
            $fexe = $request->file('sroom')->extension();
            $fpath = "$fname.$fexe";

            $request->file('sroom')->storeAs('public/listings', $fpath); 

            $data['sroom'] = 'listings/'.$fpath;
        }

        Listing::create($data);

        return redirect(route('home'))->with('sucess', 'Your Lisitngs has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function show(Listing $listing)
    {
        return view('listings.show',compact('listing'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function edit(Listing $listing)
    {
        return view('listings.edit',compact('listing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Listing $listing)
    {
        $data = $request->validate([
            'tole' => ['required','string'],
            'municipality' => ['required','string'],
            'wardno' => ['required', 'integer'],
            'price' => ['required', 'integer'],
            'tbphoto' => ['nullable', 'image', 'mimes:jpeg,png,jpg', 'max:5048'],
            'hallphoto' => ['nullable', 'image', 'mimes:jpeg,png,jpg', 'max:5048'],
            'kitchenphoto' => ['nullable', 'image', 'mimes:jpeg,png,jpg', 'max:5048'],
            'psphoto' => ['nullable', 'image', 'mimes:jpeg,png,jpg', 'max:5048'],
            'froom' => ['nullable', 'image', 'mimes:jpeg,png,jpg', 'max:5048'],
            'sroom' => ['nullable', 'image', 'mimes:jpeg,png,jpg', 'max:5048'],
            'info' => 'required',
            'rules' => 'required',
            'isNegotiable' => ['required', 'boolean'],
            'isAvailable' => ['required', 'boolean'],
            'age_range' => 'required',
            'tenant_type' => 'required',
            'gender' => 'required',
            'type' => 'required',
        ]);

        $data['user_id'] = Auth::user()->id;

        $data['isNegotiable'] = $request->isNegotiable == '0' ? false : true;
        $data['isAvailable'] = $request->isAvailable == '0' ? false : true;

        if($request->hasFile('tbphoto')){
            $fname = Str::random(20);
            $fexe = $request->file('tbphoto')->extension();
            $fpath = "$fname.$fexe";

            $request->file('tbphoto')->storeAs('public/listings', $fpath); 

            if($listing->tbphoto){
                Storage::delete('public/'. $listing->tbphoto);
            }

            $data['tbphoto'] = 'listings/'.$fpath;

        }

        if($request->hasFile('hallphoto')){
            $fname = Str::random(20);
            $fexe = $request->file('hallphoto')->extension();
            $fpath = "$fname.$fexe";

            $request->file('hallphoto')->storeAs('public/listings', $fpath); 

            if($listing->hallphoto){
                Storage::delete('public/'. $listing->hallphoto);
            }

            $data['hallphoto'] = 'listings/'.$fpath;
        }

        if($request->hasFile('kitchenphoto')){
            $fname = Str::random(20);
            $fexe = $request->file('kitchenphoto')->extension();
            $fpath = "$fname.$fexe";

            $request->file('kitchenphoto')->storeAs('public/listings', $fpath); 

            if($listing->kitchenphoto){
                Storage::delete('public/'. $listing->kitchenphoto);
            }

            $data['kitchenphoto'] = 'listings/'.$fpath;
        }

        if($request->hasFile('psphoto')){
            $fname = Str::random(20);
            $fexe = $request->file('psphoto')->extension();
            $fpath = "$fname.$fexe";

            $request->file('psphoto')->storeAs('public/listings', $fpath); 

            if($listing->psphoto){
                Storage::delete('public/'. $listing->psphoto);
            }

            $data['psphoto'] = 'listings/'.$fpath;
        }

        if($request->hasFile('froom')){
            $fname = Str::random(20);
            $fexe = $request->file('froom')->extension();
            $fpath = "$fname.$fexe";

            $request->file('froom')->storeAs('public/listings', $fpath); 

            if($listing->froom){
                Storage::delete('public/'. $listing->froom);
            }

            $data['froom'] = 'listings/'.$fpath;
        }

        if($request->hasFile('sroom')){
            $fname = Str::random(20);
            $fexe = $request->file('sroom')->extension();
            $fpath = "$fname.$fexe";

            $request->file('sroom')->storeAs('public/listings', $fpath); 

            if($listing->sroom){
                Storage::delete('public/'. $listing->sroom);
            }

            $data['sroom'] = 'listings/'.$fpath;
        }

        $listing->update($data);

        return redirect(route('home'))->with('sucess', 'Your Lisitngs has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Listing $listing)
    {
        Storage::delete('public/'.$listing->tbphoto);
        Storage::delete('public/'.$listing->hallphoto);
        Storage::delete('public/'.$listing->kitchenphoto);
        Storage::delete('public/'.$listing->psphoto);
        Storage::delete('public/'.$listing->froom);
        Storage::delete('public/'.$listing->sroom);
        $listing->delete();

        return redirect(route('home'))->with('delete', 'Your Lisitngs has been Deleted');
    }
}
