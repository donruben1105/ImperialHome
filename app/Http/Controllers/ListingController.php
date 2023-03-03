<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    //Show all listings
    public function index() {
        return view('listings.index');
        // , [
        //     'listings' => Listing::latest()->filter(request(['tag','search']))->paginate(4)
        // ]
    }

    public function property() {
        // $listing = Listing::all();
        // dd($listing);
        return view('listings.property',[
            'listings' => Listing::latest()->filter(request(['tag','search']))->paginate(6)
        ] );
    }

    //show single listing
    public function show(Listing $listing) {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    //Show Create Form
    public function create() {
        return view('listings.create');
    }

    //Store Listing Data
    public function store(Request $request) {        
        $formFields = $request->validate([
            'propertyName' => 'required',
            'propertyType' => 'required',
            'model' => 'required',
            'location' => 'required',
            'price' => 'required',
            'tags' => 'required',
            'file' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required',
        ]);

        if($request->hasFile('file')) {
            $formFields['file'] = $request->file('file')->store('logos', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Listing::create($formFields);

        return redirect('/listings/property')->with('message', 'Listing created successfully!');
    }

    //Show Edit Form
    public function edit(Listing $listing) {       
        return view('listings.edit', ['listing' => $listing]);
    }

    //Update Listing Data
    public function update(Request $request, Listing $listing) {   
        //Make sure logged in user is owner
        if($listing->user_id !=auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        
        $formFields = $request->validate([
            'propertyName' => 'required',
            'propertyType' => ['required', Rule::unique('listings')],
            'model' => 'required',
            'location' => 'required',
            'price' => 'required',
            'tags' => 'required',
            'description' => 'required',
        ]);

      
        if($request->hasFile('file')) {
            $formFields['file'] = $request->file('file')->store('logos', 'public');
        }

        $listing->update($formFields);

        return back()->with('message', 'Listing updated successfully!');
    }
    
    //Delete Listing
    public function destroy(Listing $listing) {
        //Make sure logged in user is owner
        if($listing->user_id !=auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $listing->delete();
        return redirect('/listings/manage')->with('message', 'Listing deleted successfully!');        
    }

    //manage Listings
    public function manage() {
        return view('listings.manage', ['listings' => auth()->user()->listings()->get()]);
    }
}
