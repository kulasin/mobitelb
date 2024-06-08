<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\BlogPost;
use App\Models\Categories;


class HomeController extends Controller
{
    public function index()
    {
       // Get singled out products where 'featured' column is equal to 1
       $singledOutProducts = Product::where('featured', 1)->take(6)->get();

        // Get category links for the homepage
        $categories = Categories::all();

        $products = Product::take(12)->get();

        $mobiteli = Product::where('category', 'Mobiteli i oprema')->take(8)->get();

        $laptopi = Product::where('category', 'IT & Gaming')->take(8)->get();

        $tableti = Product::where('category', 'Tableti i oprema')->take(8)->get();

        // Get last blog posts
        $lastBlogPosts = BlogPost::latest()->take(3)->get();

        return view('home', compact('singledOutProducts', 'categories','products','mobiteli','laptopi','tableti','lastBlogPosts'));
    }
}