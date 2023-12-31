<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Routing\Controller;

class ListingController extends Controller
{
    // show all listings
    public function index() {
     
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->simplePaginate(2)
            
        ]);
    }

    //show single listing 
    public function show(Listing $listing) {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    //show create form 
        public function create() {
            return view('listings.create');
        }

// store listing data 

        public function store(Request $request) {
                $formData = $request->validate([
                    'title' =>'required',
                    'company' => ['required', Rule::unique('listings', 'company')],
                    'location' => 'required',
                    'website' => 'required',
                    'email' => ['required', 'email'],
                    'tags' => 'required',
                    'description' => 'required'
                ]);

                if($request->hasFile('logo')) {
                    $formData['logo'] = $request->file('logo')->store('logos', 'public');
                }

                $formData['user_id'] = auth()->id();

                Listing::create($formData);



        return redirect('/')->with('message', 'Listing created successfully');
        }

        //show edit form

        public function edit(Listing $listing) {
            return view('listings.edit', ['listing' => $listing]);
        }

        // update listing
        public function update(Request $request, Listing $listing) {

            if($listing->user_id != auth()->id()) {
                abort(403, 'Unauthorized');
            }
            $formData = $request->validate([
                'title' =>'required',
                'company' => ['required'],
                'location' => 'required',
                'website' => 'required',
                'email' => ['required', 'email'],
                'tags' => 'required',
                'description' => 'required'
            ]);

            if($request->hasFile('logo')) {
                $formData['logo'] = $request->file('logo')->store('logos', 'public');
            }

            $listing->update($formData);



    return back()->with('message', 'Listing updated successfully');
    }

    // delete listing

    public function destroy(Listing $listing) {
        if($listing->user_id != auth()->id()) {
            abort(403, 'Unauthorized');
        }
        $listing->delete();
        return redirect('/')->with('message', 'Listing deleted successfully');
    }

    public function manage() {
        return view('listings.manage', ['listings' => auth()->user()->listings()->get()]);
    }
}
