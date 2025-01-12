<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gig;
use Illuminate\Http\Request;

class GigController extends Controller
{
    public function getCategories()
    {
        $categories = Category::all();
        return view('seller.pages.create-gig', compact('categories'));
    }



    public function getRelevantValues(Request $req)
    {
        $option_val = $req->option;
        $findVal = Category::where('id', $option_val)->pluck('values')->first();
        $arr = explode(',', $findVal);

        return response()->json($arr);
    }




    public function addGig(Request $req)
    {



        $formFields = $req->validate([
            "title" => ['', 'min:6'],
            "category" => 'required',
            'category_values' => 'required',
            'desc' => 'required',
            'faq' => 'required',
            'base_package' => 'required',
            'standard_package' => 'required',
            'premium_package' => 'required',
            'images' => ['required', 'mimes:jpg,jpeg,webp,png'],
            'tags' => ['required'],
        ]);


        $formFields['images'] = $req->file('images')->store('gig_image', 'public');


        $formFields['category_values'] = implode(',', $formFields['category_values']);

        Gig::create($formFields);





        return response()->json([
            "status" => 'success',
            "message" => 'Added Successfully'
        ]);

        // return back()->with('message', 'Gig created successfully!');
    }




    public function getGigs()
    {
        $gigs = Gig::all();

        return view('welcome', compact('gigs'));
    }


    public function getSingleGig($id)
    {
        $findGig = Gig::find($id);
        return response()->json($findGig);
    }
}
