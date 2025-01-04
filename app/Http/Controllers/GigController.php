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
            "category" => '',
            'category_values' => '',
            'desc' => '',
            'faq' => '',
            'base_package' => '',
            'standard_package' => '',
            'premium_package' => '',
            'images' => ['', 'mimes:jpg,jpeg,webp,png'],
            'tags' => [''],
        ]);


        // Gig::create($formFields);
        echo "<pre>";
        print_r($req->input('category_values'));
        echo "</pre>";
    }
}